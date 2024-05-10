<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    public function index()
    {
        # consultas SQL
        $equipos = Equipo::all();
        #dd($equipos);
        #return view('equipos.index',['equipos'=>$equipos]);
        return view('equipos.index',compact('equipos'));
    }

    public function store(Request $request){
        //dd($request->entrenador);
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->entrenador = $request->entrenador;
        $equipo->save();
        return redirect()->route('equipos.index');
    }
}
