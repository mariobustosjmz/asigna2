<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asignaciones;




class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


        $asignaciones = Asignaciones::paginate(10);



        return \View::make('asignaciones.asignaciones' ,compact('asignaciones'));


    }


    public function json_asignaciones(){

        $asignaciones=DB::table('asignaciones')
            ->join('usuarios', 'asignaciones.id_usuario',                 '=', 'usuarios.id_usuario')
            ->join('cuentas', 'usuarios.id_cuenta',                 '=', 'cuentas.id_cuenta')
            ->join('departamentos', 'usuarios.id_departamento', '=', 'cuentas.id_cuenta')
            ->join('puestos', 'usuarios.id_puesto',             '=', 'puestos.id_puesto')
            ->join('equipos', 'asignaciones.id_equipo',             '=', 'equipos.id_equipo')
            ->select( '*','usuarios.updated_at as usuario_modificacion','equipos.updated_at as equipo_modificacion' )
            ->paginate();

        $asignaciones_json= response()->json($asignaciones);

        return $asignaciones_json;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
