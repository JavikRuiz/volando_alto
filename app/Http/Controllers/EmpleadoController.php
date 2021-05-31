<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Tipo_Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleado::with(['tipo_empleado'])
         ->get();
        //  dd($empleado);
        return view('app.empleado.index',compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_empleado= Tipo_Empleado::get();
        // dd($tipo_empleado);
        return view('app.empleado.create',compact('tipo_empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->id_tipo_empleado = $request->id_tipo_empleado;
        $empleado->nombre = $request->nombre;
        $empleado->save();
        return redirect('app/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $empleados = Empleado::with(['tipo_empleado'])->get() ->where('id',$empleado->id);
        $tipo_empleado = Tipo_Empleado::get();
        // dd($tipo_empleado);
        return view('app/empleado/edit',compact('empleados','tipo_empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        // dd($request->id_tipo_empleado);
        $empleado = Empleado::findOrfail($empleado->id);
        $empleado->id_tipo_empleado = $request->id_tipo_empleado;
        $empleado->nombre = $request->nombre;
        $empleado->save();
        return redirect('app/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('app/empleado');
    }
}
