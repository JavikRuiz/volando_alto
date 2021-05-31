@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top: 30px">
            @foreach ($vuelo as $v)
                
            
            <form method="POST" action="{{route('vuelo.update',$v->id)}}" autocomplete="off">
                @csrf
                @method('put') 
                <div class="form-group">
                    <label for="">Selecciona un Avion</label>
                    <select  class="form-control" name="id_avion" required>
                       <option value="{{$v->avion->tipo_avion->id}}">{{$v->avion->tipo_avion->tipo}}</option>
                        @foreach($avion as $a)
                            <option value="{{$a->id}}"> {{$a->tipo_avion->tipo}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Destino</label>
                    <select  class="form-control" name="id_lugar" required>
                       <option value="{{$v->lugar->id}}">{{$v->lugar->origen}} | {{$v->lugar->destino}} | {{$v->lugar->tarifa}}</option>
                        @foreach($lugar as $l)
                            <option value="{{$l->id}}"> {{$l->origen}} | {{$l->destino}} | {{$l->tarifa}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Piloto</label>
                    <select  class="form-control" name="nombre_piloto" required>
                       <option value="{{$v->piloto}}">{{$v->piloto}}</option>
                        @foreach($piloto as $p)
                            <option value="{{$p->nombre}}"> {{$p->nombre}} </option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Selecciona un Copiloto</label>
                    <select  class="form-control" name="nombre_copiloto" required>
                       <option value="{{$v->copiloto}}">{{$v->copiloto}}</option>
                        @foreach($copiloto as $c)
                            <option value="{{$c->nombre}}"> {{$c->nombre}} </option>
                       @endforeach
                    </select>
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