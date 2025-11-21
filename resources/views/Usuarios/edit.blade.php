@extends('layout')
@section('title', 'Editar Usuario')
@section('content')
<h3 class="mt-4 mb-3">Editar Usuarios</h3>
<form action="{{ route('usuarios.update',$datos->id) }}" method="POST">
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
            <input type="text" name="apellidos" class="form-control" placeholder="Ingrese apellidos" value="{{ old('apellidos', $datos->apellidos) }}">
            @error('apellidos')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="correo" class="form-control" placeholder="Ingrese correo" value="{{ old('correo', $datos->correo) }}">
            @error('correo')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono" value="{{ old('telefono', $datos->telefono) }}">
            @error('telefono')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="direccion" class="form-control" placeholder="Ingrese direccion" value="{{ old('direccion', $datos->direccion) }}">
            @error('direccion')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="DocumentoId" class="form-control" placeholder="Ingrese Documento de Identidad" value="{{ old('DocumentoId', $datos->DocumentoId) }}">
            @error('DocumentoId')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="text" name="password" class="form-control" placeholder="Ingrese contraseña" value="{{ old('password', $datos->password) }}">
            @error('password')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <br>
    <button class="btn btn-success">Guardar</button>
    <a href="{{ url('usuarios') }}" class="btn btn-secondary">Cancelar</a>
</form>
@stop
