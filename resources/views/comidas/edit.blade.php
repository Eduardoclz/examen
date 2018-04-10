@extends('layouts.default')
@section('content')
    <h1>Editar comida</h1>
    <a href="{{route('comidas.index')}}">Volver a comidas</a>
    @if($exito)
        <p>La comida se actualizó</p>
    @endif
    <form method="POST" action="{{ route('comidas.update',array('comidas'=>$comida->id)) }}">
        {{ csrf_field() }}
        <div class="form-group">
        <input class="form-control"  type="hidden" name="_method" value="PUT">
        <label class="form-label">Nombre:</label>
        </div>
        <div class="form-group">
        <input class="form-control"  type="text" name="txtNombre" value="{{$comida->nombre}}">
        <label class="form-label">Precio:</label>
        </div>
        <div class="form-group">
        <input class="form-control"  type="text" name="txtPrecio" value="{{$comida->precio}}">
        <label class="form-label">Descripcion:</label>
        </div>
        <div class="form-group">
        <input class="form-control" type="text" name="txtTexto" value="{{$comida->texto}}">
        <button class="btn btn-primary" type="submit">Actualizar comida</button>
    </form>
    <div class="form-group">
    <form  method="POST" action="{{route('comidas.destroy',array('comidas'=>$comida->id))}}">
        {{ csrf_field() }}
       
      
        <input class="form-control" type="hidden" name="_method" value="DELETE">
    
        <button class="btn btn-danger" type="submit">Borrar comida</button>
</div>
    </form>

@endsection