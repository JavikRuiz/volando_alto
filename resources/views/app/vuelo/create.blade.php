@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            <form method="POST" action="{{route('vuelo.store')}}" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Selecciona un Tipo de Avion</label>
                    <select  class="form-control" name="id_avion" required>
                       {{-- <option ></option> --}}
                        @foreach($avion as $a)
                            <option value="{{$a->id}}"> {{$a->tipo_avion->tipo}} | {{$a->identificacion}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Destino</label>
                    <select  class="form-control" name="id_lugar" required>
                       {{-- <option ></option> --}}
                        @foreach($lugar as $l)
                            <option value="{{$l->id}}"> {{$l->origen}} | {{$l->destino}} | {{$l->tarifa}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Piloto</label>
                    <select  class="form-control" name="nombre_piloto" required>
                       {{-- <option ></option> --}}
                        @foreach($piloto as $p)
                            <option value="{{$p->nombre}}"> {{$p->nombre}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Copiloto</label>
                    <select  class="form-control" name="nombre_copiloto" required>
                       {{-- <option ></option> --}}
                        @foreach($copiloto as $c)
                            <option value="{{$c->nombre}}"> {{$c->nombre}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group" style="margin-top: 5px">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
                
              </form>
        </div>
    </div>
</div>

@endsection