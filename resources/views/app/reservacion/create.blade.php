@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 30px">
            <form method="POST" action="{{route('reservacion.store')}}" autocomplete="off">
                {{ csrf_field() }}
                <table class="table" style="margin-top: 30px">
                   <h3>Selecciona un Vuelo</h3>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo avion</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Origen</th>
                            <th scope="col">Destino</th>
                            <th scope="col">Tarifa</th>
                            <th scope="col">Cant Pasajeros</th>
                            <th scope="col">Selecciona Cliente</th>
                            <th colspan="3">Operaciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vuelo as $v)
                            <tr>
                                <th scope="row"><input type="hidden" value="{{$v->id}}" name="id_vuelo"> {{$v->id}}</th>
                                <td>{{$v->avion->tipo_avion->tipo}}</td>
                                <td>{{$v->avion->identificacion}}</td>
                                <td>{{$v->lugar->origen}}</td>
                                <td>{{$v->lugar->destino}}</td>
                                <td>{{$v->lugar->tarifa}}</td>
                                <td>{{$v->avion->cant_pasajeros}}</td>
                                <td>
                                   
                                    <select  class="form-control" name="id_pasajero" required>
                                        {{-- <option ></option> --}}
                                         @foreach($cliente as $c)
                                             <option value="{{$c->id}}"> {{$c->nombre}} {{$c->apellido}}  </option>
                                        @endforeach
                                     </select>
                                   
                                </td>
                                <td><button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Desea Confirmar Reservacion?')">Confirmar</button></td>
                                
                            </tr>
                        @endforeach
                        
                   
                    </tbody>
                </table>
                               
              </form>
        </div>
    </div>
</div>

@endsection