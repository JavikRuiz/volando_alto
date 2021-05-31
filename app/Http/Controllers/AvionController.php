<?php

namespace App\Http\Controllers;

use App\Avion;
use App\Tipo_Avion;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avion = Avion::with(['tipo_avion'])
         ->get();
        //  dd($avion);
        return view('app.avion.index',compact('avion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_avion= Tipo_Avion::get();
        // dd($tipo_avion);
        return view('app.avion.create',compact('tipo_avion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->cant_pasajeros);
        $avion = new Avion();
        $avion->id_tipo_avion = $request->id_tipo_avion;
        $avion->identificacion = $request->identificacion;
        $avion->cant_pasajeros = $request->cant_pasajeros;
        $avion->save();
        return redirect('app/avion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function show(Avion $avion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avion = Avion::with(['tipo_avion'])->get() ->where('id',$id);
        $tipo_avion = Tipo_Avion::get();
        // dd($tipo_avion);
        return view('app/avion/edit',compact('avion','tipo_avion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avion $avion)
    {
        //  dd($avion->id);
         $avion = Avion::findOrfail($avion->id);
         $avion->id_tipo_avion = $request->id_tipo_avion;
         $avion->identificacion = $request->identificacion;
         $avion->cant_pasajeros = $request->cant_pasajeros;
         $avion->save();
        //  dd('listo');
         return redirect('app/avion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        Avion::destroy($id);
        return redirect('app/avion');
    }
}
