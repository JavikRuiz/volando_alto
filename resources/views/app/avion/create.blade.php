@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            <form method="POST" action="{{route('avion.store')}}" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Selecciona un Tipo de Avion</label>
                    <select  class="form-control" name="id_tipo_avion" required>
                       {{-- <option ></option> --}}
                        @foreach($tipo_avion as $tipo)
                            <option value="{{$tipo->id}}"> {{$tipo->tipo}} </option>
                       @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="name">Identificacion</label>
                  <input type="text" class="form-control" name="identificacion" required>
                </div>
                <div class="form-group">
                    <label for="name">cant_pasajeros</label>
                    <input type="text" class="form-control" name="cant_pasajeros" required>
                  </div>
                <div class="form-group" style="margin-top: 5px">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
                
              </form>
        </div>
    </div>
</div>

@endsection