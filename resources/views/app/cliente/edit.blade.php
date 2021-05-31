@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            @foreach ($cliente as $c)
                            
                <form method="POST" action="{{route('cliente.update',$c->id)}}" autocomplete="off">
                    @csrf
                    @method('put') 
                    <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$c->nombre}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value="{{$c->apellido}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Documento</label>
                        <input type="text" class="form-control" name="documento" value="{{$c->documento}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">correo</label>
                        <input type="email" class="form-control" name="correo" value="{{$c->correo}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Telefono</label>
                        <input type="text" class="form-control" name="telefono" value="{{$c->telefono}}" required>
                    </div> 
                
                    <div class="form-group" style="margin-top: 5px">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                    
                </form>
            @endforeach
        </div>
    </div>
</div>

@endsection