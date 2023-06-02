<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    
    //     $actividades = Actividad::all();
    //     $data = json_encode([
    //         "data" => $actividades
    //     ]);
    //     return response($data,200);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $actividad = new Actividad();
    //     $actividad->name = $request->input('name');
    //     $actividad->username = $request->input('username');
    //     $actividad->password = $request->input('password');
    //     $actividad->save();
    //     return response(json_encode([
    //         "data" => "Actividad Registrado"
    //     ]));
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($codigo)
    {
        $actividad = Actividad::all();
        $actividad = Actividad::where('codigo_estudiante',$codigo)->get();
        return response(json_encode([
            "data" => $actividad
        ]));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $actividad = Actividad::find($id);
    //     $actividad->name = $request->input('name');
    //     $actividad->username = $request->input('username');
    //     $actividad->password = $request->input('password');
    //     $actividad->save();
    //     return response(json_encode([
    //         "data"=>"registro modificado"
    //     ]));
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $actividad = Actividad::find($id);
    //     if(empty($actividad)){
    //         return response(json_encode([
    //             "data" => "El Actividad no existe"
    //         ]),404);
    //     }
    //     $actividad -> delete();
    //     return response(json_encode([
    //         "data"=>"Registro Eliminado"
    //     ]));
    // }
}