@extends('layout')
@section('title', 'Registro Categoria')
@section('content')
<h3 class="mt-4 mb-3">Editar Categoría</h3>
<form action="{{ url('categorias.update',$datos->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre categoria" value="{{ old('nombre', $datos->nombre) }}">
            @error('nombre')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripción" value="{{ old('descripcion', $datos->descripcion)) }}">
            @error('descripcion')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <br>
    <button class="btn btn-success">Guardar</button>
    <a href="{{ url('categorias') }}" class="btn btn-secondary">Cancelar</a>
</form>
@stop
