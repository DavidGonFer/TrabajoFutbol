<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos=Partido::all();
        return View('Partidos/index',[
            'partidos'=>$partidos
        ]);
            
        $partidos= Partido::where('club','equipos')->get()
        ->with('partidos')
        ->get()
        ->toArray();
        $partidos= Partido::where('fecha_hora','adversarios')->get()
        ->with('partidos')
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
        $partidos = new Partido();
        return View('Partidos/save',[
            'partidos' => $partidos
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
        $partidos = new Partido();
        $partidos  -> cod_convocatoria = $request -> cod_convocatoria;
        $partidos  -> cod_equipo = $request -> cod_equipo;
        $partidos  -> cod_adversario = $request -> cod_adversario;
        $partidos  -> duracion= $request -> duracion;
        $partidos  -> fecha_hora = $request -> fecha_hora;
        $partidos  -> observaciones = $request -> observaciones;
        
        $file=$request->file('archivo');
        $nombre=$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$nombre);
        $partidos->logo=$nombre;

        $file=$request->file('archivo1');
        $nombre1=$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$nombre1);
        $partidos->logo_adversario=$nombre1;

        $partidos->save();
        $partidos  -> save();
        return Redirect::to('partidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partidos = Partido::find($id);
        return View('Partidos/save',[
            'partidos' => $partidos
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
        $request->validate([
            'cod_convocatoria' => 'required|max:3|Integer',
            'cod_equipo' => 'required|max:3|Integer',
            'cod_adversario' => 'required|max:3|Integer',
            'duracion' => 'required|max:90|Integer',
            'fecha_hora' => 'required|max:20|String',
            'observaciones' => 'required|max:50|String',
    ]);

        $partidos = Partido::find($id);
        $partidos  -> cod_convocatoria = $request -> cod_convocatoria;
        $partidos  -> cod_equipo = $request -> cod_equipo;
        $partidos  -> cod_convocatoria = $request -> cod_convocatoria;
        $partidos  -> duracion= $request -> duracion;
        $partidos  -> fecha_hora= $request -> fecha_hora;
        $partidos  -> observaciones = $request -> observaciones;
        $partidos  -> save();
        return Redirect::to('partidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partidos = Partido::find($id);
        $partidos -> delete();
        return Redirect::to('partidos'); 
    }
}
