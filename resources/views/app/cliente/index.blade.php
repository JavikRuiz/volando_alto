@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table" style="margin-top: 30px">
            <div class="col-2">
                <a href="{{route('cliente.create')}}" class="btn btn-success">Registrar</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefon</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $c)
                    <tr>
                        <th scope="row">{{$c->id}}</th>
                        <td>{{$c->nombre}}</td>
                        <td>{{$c->apellido}}</td>
                        <td>{{$c->documento}}</td>
                        <td>{{$c->correo}}</td>
                        <td>{{$c->telefono}}</td>
                        <td>
                            <form action="{{url('app/cliente')}}/{{$c->id}}/edit">
                                <button type="submit" class="btn btn-warning">editar</button>
                            </form>
                        </td>
                        {{-- <td>
                            
                            <form method="post" action="{{url('app/cliente/'.$c->id)}}">
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