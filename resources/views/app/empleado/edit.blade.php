@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            @foreach ($empleados as $e)
                
            
            <form method="POST" action="{{route('empleado.update',$e->id)}}" autocomplete="off">
                @csrf
                @method('put') 
                <div class="form-group">
                    <label for="">Selecciona un Cargo</label>
                    <select  class="form-control" name="id_tipo_empleado" required>
                       <option value="{{$e->tipo_empleado->id}}">{{$e->tipo_empleado->tipo}}</option>
                        @foreach($tipo_empleado as $tipo)
                            <option value="{{$tipo->id}}"> {{$tipo->tipo}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="name">Nombre del Empleado</label>
                  <input type="text" class="form-control" name="nombre" value="{{$e->nombre}}" required>
                </div>
                <div class="form-group" style="margin-top: 5px">
                    <button type="submit" class="btn btn-primary">editar</button>
                </div>
                
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection