@extends('layout')
@section('title','Categorias')
@section('content')

<h3 class = "mt-4">Listado De Categorias</h3>
<div class="text-end">
    <a href="{{url('categorias/create')}}" class="btn btn-primary">Nuevo</a>
</div>

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($datos as $categoria)
            <tr>
                <td>
                    {{ $categoria ->nombre}}
                </td>
                <td>
                    {{ $categoria ->descripcion}}
                </td>
                <td>
                    Editar - eliminar
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop()