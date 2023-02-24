<?php

namespace App\Http\Controllers;
use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias = Convocatoria::all();
            return View('Convocatorias/index',[
            'convocatorias' => $convocatorias
            ]);
            $convocatorias= Convocatoria::where('nombre','jugadores')->get()
            ->with('convocatorias')
            ->get()
            ->toArray();
            $convocatorias= Convocatoria::where('apellidos','jugadores')->get()
            ->with('convocatorias')
            ->get()
            ->toArray();
            $convocatorias= Convocatoria::where('fecha_hora','partidos')->get()
            ->with('convocatorias')
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
        $convocatorias = new Convocatoria();
            return View('Convocatorias/save',[
            'convocatorias' => $convocatorias
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
            'cod_partido' => 'required|max:3|Integer',
            'cod_jugador' => 'required|max:3|Integer',
            'convocado' => 'required|max:2|String',

    ]);
        $convocatorias = new Convocatoria();
        $convocatorias-> cod_partido = $request -> cod_partido;
        $convocatorias -> cod_jugador = $request -> cod_jugador;
        $convocatorias -> convocado= $request -> convocado;
        $convocatorias -> save();
        return Redirect::to('convocatorias');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convocatorias= Convocatoria::find($id);
        $convocatorias -> delete();
        return Redirect::to('convocatorias');
    }
}
