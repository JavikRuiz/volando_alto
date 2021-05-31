@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <table class="table" style="margin-top: 30px">
                   
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo avion</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col">Cant Pasajeros</th>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Apellido Cliente</th>
                    <th scope="col">Documento </th>
                    <th scope="col">correo</th>
                    <th scope="col">telefono</th>
                    <th colspan="2">Operaciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($reservacion as $r)
                    <tr>
                        <th scope="row"><input type="hidden"> {{$r->id}}</th>
                        <td>{{$r->vuelo->avion->tipo_avion->tipo}}</td>
                        <td>{{$r->vuelo->avion->identificacion}}</td>
                        <td>{{$r->vuelo->lugar->origen}}</td>
                        <td>{{$r->vuelo->lugar->destino}}</td>
                        <td>{{$r->vuelo->lugar->tarifa}}</td>
                        <td>{{$r->vuelo->avion->cant_pasajeros}}</td>
                        <td>{{$r->pasajero->nombre}}</td>
                        <td>{{$r->pasajero->apellido}}</td>
                        <td>{{$r->pasajero->documento}}</td>
                        <td>{{$r->pasajero->correo}}</td>
                        <td>{{$r->pasajero->telefono}}</td>
                        
                
                        <td>
                            
                            <form method="post" action="{{url('app/reservacion/'.$r->id)}}">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Desea Cancelar?')">Cancelar</button>
                            </form>
                            
                        </td>
                        
                    </tr>
                @endforeach
                
           
            </tbody>
        </table>
        </div>
        
    </div>
</div>

@endsection