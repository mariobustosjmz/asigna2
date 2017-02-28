<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Historial;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {


        $historial = Historial::paginate(10);

        return \View::make('historial.historial' ,compact('historial'));
    }




    public function json_equipos(){

        $historial=DB::table('historial')
            ->select('id_equipo', 'nombre', 'tipo', 'ram', 'disco_duro', 'particionado', 'procesador', 'so',
                'arquitectura', 'paqueteria', 'antivirus', 'marca', 'modelo', 's_n', 's_tag', 'created_at')
            ->paginate();

        $usuarios_json= response()->json($historial);

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
