<?php

namespace App\Http\Controllers;

use App\Pasajero;
use Illuminate\Http\Request;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Pasajero::get();
        
        //  dd($cliente);
        return view('app.cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('app.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Pasajero();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->documento = $request->documento;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        // dd('listooo');
        $cliente->save();
        return redirect('app/cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasajero  $pasajero
     * @return \Illuminate\Http\Response
     */
    public function show(Pasajero $pasajero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasajero  $pasajero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $cliente = Pasajero::where('id',$id)->get();
       
        // dd($cliente);
        return view('app/cliente/edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasajero  $pasajero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->nombre);
        $cliente = Pasajero::findOrfail($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->documento = $request->documento;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect('app/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasajero  $pasajero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasajero::destroy($id);
        return redirect('app/cliente');
    }
}
