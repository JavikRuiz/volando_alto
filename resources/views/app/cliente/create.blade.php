@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            <form method="POST" action="{{route('cliente.store')}}" autocomplete="off">
                {{ csrf_field() }}
                
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="name">Apellido</label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="name">Documento</label>
                    <input type="text" class="form-control" name="documento" required>
                </div>
                <div class="form-group">
                    <label for="name">correo</label>
                    <input type="email" class="form-control" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="name">Telefono</label>
                    <input type="text" class="form-control" name="telefono" required>
                </div> 
               
                <div class="form-group" style="margin-top: 5px">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                
              </form>
        </div>
    </div>
</div>

@endsection