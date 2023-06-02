<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        $data = json_encode([
            "data" => $estudiantes
        ]);
        return response($data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->name = $request->input('name');
        $estudiante->username = $request->input('username');
        $estudiante->password = $request->input('password');
        $estudiante->save();
        return response(json_encode([
            "data" => "Estudiante Registrado"
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return response(json_encode([
            "data" => $estudiante
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->name = $request->input('name');
        $estudiante->username = $request->input('username');
        $estudiante->password = $request->input('password');
        $estudiante->save();
        return response(json_encode([
            "data"=>"registro modificado"
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        if(empty($estudiante)){
            return response(json_encode([
                "data" => "El Estudiante no existe"
            ]),404);
        }
        $estudiante -> delete();
        return response(json_encode([
            "data"=>"Registro Eliminado"
        ]));
    }
}
