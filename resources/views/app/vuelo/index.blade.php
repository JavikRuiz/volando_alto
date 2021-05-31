@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table" style="margin-top: 30px">
            <div class="col-2">
                <a href="{{route('vuelo.create')}}" class="btn btn-success">Nuevo</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo de Avion</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombre Piloto</th>
                    <th scope="col">Nombre Copiloto</th>
                    <th colspan="2">operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vuelo as $v)
                    <tr>
                        <th scope="row">{{$v->id}}</th>
                        <td>{{$v->avion->tipo_avion->tipo}}</td>
                        <td>{{$v->avion->identificacion}}</td>
                        <td>{{$v->piloto}}</td>
                        <td>{{$v->copiloto}}</td>
                        <td>
                          <form action="{{url('app/vuelo')}}/{{$v->id}}/edit">
                                <button type="submit" class="btn btn-warning">editar</button>
                            </form>  
                        </td>
                        <td>
                            
                            <form method="post" action="{{url('app/vuelo/'.$v->id)}}">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger" onclick="return confirm('desea borrar?')">borrar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
                
           
            </tbody>
        </table>
    </div>
</div>

@endsection