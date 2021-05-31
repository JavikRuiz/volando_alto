<?php

namespace App\Http\Controllers;

use App\Avion;
use App\Vuelo;
use App\Lugar;
use App\Empleado;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelo = Vuelo::with(['avion'=>function($a){
            $a->with('tipo_avion');
        },'lugar'])->get();
        //  dd($vuelo);
        return view('app.vuelo.index',compact('vuelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avion= Avion::with(['tipo_avion'])->get();
        $lugar = Lugar::get();
        $piloto = Empleado::with(['tipo_empleado'])->where('id_tipo_empleado',1)->get();
        $copiloto = Empleado::with(['tipo_empleado'])->where('id_tipo_empleado',2)->get();
        //  dd($avion);
        return view('app.vuelo.create',compact('avion','lugar','piloto','copiloto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vuelo = new Vuelo();
        $vuelo->id_avion = $request->id_avion;
        $vuelo->id_lugar = $request->id_lugar;
        $vuelo->piloto = $request->nombre_piloto;
        $vuelo->copiloto = $request->nombre_copiloto;
        // dd('listo');
        $vuelo->save();
        return redirect('app/vuelo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show(Vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vuelo $vuelo)
    {
        $vuelo = Vuelo::with(['lugar','avion'=>function($a){
            $a->with('tipo_avion');
        }])->where('id',$vuelo->id)->get();
        $avion= Avion::with(['tipo_avion'])->get();
        $lugar = Lugar::get();
        $piloto = Empleado::with(['tipo_empleado'])->where('id_tipo_empleado',1)->get();
        $copiloto = Empleado::with(['tipo_empleado'])->where('id_tipo_empleado',2)->get();
        // dd($vuelo);
        return view('app/vuelo/edit',compact('vuelo','avion','lugar','piloto','copiloto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        // dd($request->id_lugar);
        $vuelo = Vuelo::findOrfail($vuelo->id);
        $vuelo->id_avion = $request->id_avion;
        $vuelo->id_lugar = $request->id_lugar;
        $vuelo->piloto = $request->nombre_piloto;
        $vuelo->copiloto = $request->nombre_copiloto;
        // dd('listo');
        $vuelo->save();
        return redirect('app/vuelo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Vuelo::destroy($id);
        return redirect('app/vuelo');
    }
}
