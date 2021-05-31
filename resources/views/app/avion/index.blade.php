@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table" style="margin-top: 30px">
            <div class="col-2">
                <a href="{{route('avion.create')}}" class="btn btn-success">Nuevo</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo de Avion</th>
                    <th scope="col">Numero de Identificacion</th>
                    <th scope="col">Cantidad de Pasajeros</th>
                    <th colspan="2">operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($avion as $a)
                    <tr>
                        <th scope="row">{{$a->id}}</th>
                        <td>{{$a->tipo_avion->tipo}}</td>
                        <td>{{$a->identificacion}}</td>
                        <td>{{$a->cant_pasajeros}}</td>
                        <td>
                            <form action="{{url('app/avion')}}/{{$a->id}}/edit">
                                <button type="submit" class="btn btn-warning">editar</button>
                            </form>
                        </td>
                        {{-- <td>
                            
                            <form method="post" action="{{url('app/avion/'.$a->id)}}">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger" onclick="return confirm('desea borrar?')">borrar</button>
                            </form>
                            
                        </td> --}}
                    </tr>
                @endforeach
                
           
            </tbody>
        </table>
    </div>
</div>

@endsection