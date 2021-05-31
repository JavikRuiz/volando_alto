@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            @foreach ($avion as $a)
                
            
            <form method="POST" action="{{route('avion.update',$a->id)}}" autocomplete="off">
                @csrf
                @method('put') 
                <div class="form-group">
                    <label for="">Selecciona un Avion</label>
                    <select  class="form-control" name="id_tipo_avion" required>
                       <option value="{{$a->tipo_avion->id}}">{{$a->tipo_avion->tipo}}</option>
                        @foreach($tipo_avion as $tipo)
                            <option value="{{$tipo->id}}"> {{$tipo->tipo}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="name">Identificacion</label>
                  <input type="text" class="form-control" name="identificacion" value="{{$a->identificacion}}" required>
                </div>
                <div class="form-group">
                    <label for="name">Cantidad de Pasajeros</label>
                    <input type="text" class="form-control" name="cant_pasajeros" value="{{$a->cant_pasajeros}}" required>
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