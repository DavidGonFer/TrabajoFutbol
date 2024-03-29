<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jugadore;
use App\Models\Equipo;
use Illuminate\Support\Facades\Redirect;
class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugadore::all();
            return View('Jugadores/index',[
            'jugadores' => $jugadores
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugadores = new Jugadore();
        return View('Jugadores/save',[
            'jugadores' => $jugadores
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
        $request->validate([
            'cod_jugador' => 'required|Integer|max:3',
            'cod_convocatoria' => 'required|Integer|max:3',
            'nombre' => 'required|String|max:20',
            'apellidos' => 'required|String|max:30',
            'telefono' => 'required|Integer|min:9',
            'observaciones' => 'required|String|max:50',
         ]);

        $jugadores = new Jugadore();
        $jugadores -> cod_jugador = $request -> cod_jugador;
        $jugadores -> cod_convocatoria = $request -> cod_convocatoria;
        $jugadores -> nombre = $request -> nombre;
        $jugadores -> fecha_nacimiento = $request -> fecha_nacimiento;
        $jugadores -> apellidos = $request -> apellidos;
        $jugadores -> telefono = $request -> telefono;
        $jugadores -> observaciones = $request -> observaciones;
        $file=$request->file('archivo');
        $nombre=$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$nombre);
        $jugadores->logo=$nombre;
        $jugadores->save();
        $jugadores -> save();
        return Redirect::to('jugadores');
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
        $jugadores = Jugadore::find($id);
        return View('Jugadores/save',[
            'jugadores' => $jugadores
        ]);
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
        $jugadores = Jugadore::find($id);
        $jugadores -> cod_jugador = $request -> cod_jugador;
        $jugadores -> cod_convocatoria = $request -> cod_convocatoria;
        $jugadores -> nombre = $request -> nombre;
        $jugadores -> fecha_nacimiento = $request -> fecha_nacimiento;
        $jugadores -> apellidos = $request -> apellidos;
        $jugadores -> telefono = $request -> telefono;
        $jugadores -> observaciones = $request -> observaciones;
        $jugadores -> save();
        return Redirect::to('jugadores');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugadores = Jugadore::find($id);
        $jugadores -> delete();
        return Redirect::to('jugadores');
    }
}
