<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::all();
            return View('Asistencias/index',[
            'asistencias' => $asistencias
            ]);

            $asistencias= Asistencia::where('nombre','jugadores')->get()
            ->with('asistencias')
            ->get()
            ->toArray();
            $asistencias= Asistencia::where('apellidos','jugadores')->get()
            ->with('asistencias')
            ->get()
            ->toArray();
            $asistencias= Asistencia::where('duracion','entrenamientos')->get()
            ->with('asistencias')
            ->get()
            ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistencias = new Asistencia();
            return View('Asistencias/save',[
            'asistencias' => $asistencias
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asistencias = new Asistencia();
        $asistencias-> cod_entrenamiento = $request -> cod_entrenamiento;
        $asistencias -> cod_jugador = $request -> cod_jugador;
        $asistencias -> asistencia= $request -> asistencia;
        $asistencias -> save();
        return Redirect::to('asistencias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrenamientos = Asistencia::find($id);
        $entrenamientos -> delete();
        return Redirect::to('asistencias');
    }
}
