<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos=Equipo::all();
        return View('index',[
            'equipos'=>$equipos
        ]);
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $equipo=new Equipo();
        return View('save',[
            'equipo'=>$equipo
        ]
        );
        
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo=new Equipo();
        $equipo->club=$request->club;
        $equipo->categoria=$request->categoria;
        $equipo->temporada=$request->temporada;
        $equipo->deporte=$request->deporte;
        $equipo->save();
        return Redirect::to('equipos')->with('equipe','Se hac reado correctamente');
        
    }

    public function reglas(){
        switch($this->method()){
            case "POST":{
                return ["club" => "required|unique:club"];
            }
            case "PUT":{
                return ["club" => "required|unique:club"];
            }
        }
        return [];
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
        $equipo= Equipo::find($id);
        return View('save',[
            'equipo'=>$equipo
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
        $equipo=Equipo::find($id);
        $equipo->club=$request->club;
        $equipo->categoria=$request->categoria;
        $equipo->temporada=$request->temporada;
        $equipo->deporte=$request->deporte;
        $equipo->save();
        return Redirect::to('equipos')->with('equipe','Se hac reado correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo= Equipo::find($id);
        $equipo->delete();
        return Redirect::to('equipos')->with('equipe','Se hac reado correctamente');

    }
}
