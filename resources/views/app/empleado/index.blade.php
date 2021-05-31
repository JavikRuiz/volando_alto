@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table" style="margin-top: 30px">
            <div class="col-2">
                <a href="{{route('empleado.create')}}" class="btn btn-success">Nuevo</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleado as $e)
                    <tr>
                        <th scope="row">{{$e->id}}</th>
                        <td>{{$e->nombre}}</td>
                        <td>{{$e->tipo_empleado->tipo}}</td>
                        <td>
                            <form action="{{url('app/empleado')}}/{{$e->id}}/edit">
                                <button type="submit" class="btn btn-warning">editar</button>
                            </form>
                        </td>
                        <td>
                            
                            <form method="post" action="{{url('app/empleado/'.$e->id)}}">
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