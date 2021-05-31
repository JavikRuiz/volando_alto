<?php

namespace App\Http\Controllers;

use App\Reservacion;
use App\Vuelo;
use App\Pasajero;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservacion = Reservacion::with(['pasajero','vuelo'=>function($v){
            $v->with(['lugar','avion'=>function($a){
                $a->with('tipo_avion');
            }]);
        }])->get();
        
        //  dd($reservacion);
        return view('app.reservacion.index',compact('reservacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vuelo = Vuelo::with(['lugar','avion'=>function($a){
            $a->with('tipo_avion');
        }])->get();
        $cliente = Pasajero::get();
        return view('app.reservacion.create',compact('vuelo','cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->id_vuelo);
        $reservacion = new Reservacion();
        $reservacion->id_vuelo = $request->id_vuelo;
        $reservacion->id_pasajero = $request->id_pasajero;
       
        // dd('listooo');
        $reservacion->save();
        return redirect('app/reservacion/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Reservacion::destroy($id);
        return redirect('app/reservacion');
    }
}
