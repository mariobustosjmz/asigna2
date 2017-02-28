<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuarios;



class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {


        $usuarios=DB::table('cuentas')
            ->join('usuarios', 'cuentas.id_cuenta',                 '=', 'usuarios.id_cuenta')
            ->join('departamentos', 'usuarios.id_departamento', '=', 'departamentos.id_departamento')
            ->join('puestos', 'usuarios.id_puesto',             '=', 'puestos.id_puesto')
            ->select('id_usuario','usuarios.id_cuenta','no_empleado','nombres','apellidos','red_local','red_inalambrica','usuario_dominio','password_dominio',
                'password_local','usuario_local','password_outlook','correo_outlook','password_pst','departamentos.nombre as departamento','puestos.nombre as puesto')
            ->paginate();

        $usuarios_json= response()->json($usuarios);


        return \View::make('usuarios.usuarios' ,compact('usuarios'),compact('usuarios_json'));
    }

    public function json_usuarios(){

        $usuarios=DB::table('cuentas')
            ->join('usuarios', 'cuentas.id_cuenta',                 '=', 'usuarios.id_cuenta')
            ->join('departamentos', 'usuarios.id_departamento', '=', 'departamentos.id_departamento')
            ->join('puestos', 'usuarios.id_puesto',             '=', 'puestos.id_puesto')
            ->select('id_usuario','usuarios.id_cuenta','no_empleado','nombres','apellidos','red_local','red_inalambrica','usuario_dominio','password_dominio',
                'password_local','usuario_local','password_outlook','correo_outlook','password_pst','departamentos.nombre as departamento','puestos.nombre as puesto','usuarios.created_at')
            ->paginate();

        $usuarios_json= response()->json($usuarios);

        return $usuarios_json;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return 'Aqui va el form para crear un usuario';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'Aqui mostramos la info del usuario: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {



        return 'Aqui editamos el usuario: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(EditUserRequest $request,$id)
    {

        //$request->all();
        $user = Usuarios::findOrFail($id);
        $user-> fill(Request::all());
        $user->save();

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
