<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Entrenamiento;
use App\Models\Jugadore;
use Illuminate\Support\Facades\Redirect;
class EntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenamientos = Entrenamiento::all();
            return View('entrenamientos/index',[
            'entrenamientos' => $entrenamientos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenamientos = new Entrenamiento();
        return View('entrenamientos/save',[
            'entrenamientos' => $entrenamientos
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
        $entrenamientos = new Entrenamiento();
        $entrenamientos -> cod_entrenamiento = $request -> cod_entrenamiento;
        $entrenamientos -> fecha_hora= $request -> fecha_hora;
        $entrenamientos -> duracion = $request -> duracion;
        $entrenamientos -> observaciones = $request -> observaciones;
        $entrenamientos -> save();
        return Redirect::to('entrenamientos');
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
        $entrenamientos = Entrenamiento::find($id);
        return View('entrenamientos/save',[
            'entrenamientos' => $entrenamientos
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
            'cod_entrenamiento' => 'required|Integer|max:3',
            'duracion' => 'required|Integer|max:10',
            'observaciones' => 'required|String|max:50',
         ]);
         
        $entrenamientos = Entrenamiento::find($id);
        $entrenamientos -> cod_entrenamiento = $request -> cod_entrenamiento;
        $entrenamientos -> fecha_hora = $request -> fecha_hora;
        $entrenamientos -> duracion = $request -> duracion;
        $entrenamientos -> observaciones = $request -> observaciones;
        $entrenamientos -> save();
        return Redirect::to('entrenamientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrenamientos = Entrenamiento::find($id);
        $entrenamientos -> delete();
        return Redirect::to('entrenamientos');
    }
}
