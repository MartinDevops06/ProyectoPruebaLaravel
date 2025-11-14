@extends('layout')
@section('title','Categorias')
@section('content')

<h3 class = "mt-4">Listado De Categorias</h3>
<div class="text-end">
    <a href="{{url('categorias/create')}}" class="btn btn-primary">Nuevo</a>
</div>

@if(session('type'))
    <div class = "alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
        <strong>Noticia:</strong>{{ session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
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
                    <a href="{{route('categorias.edit',$categoria->id)}}" class ="btn btn-info">
                        <img src="{{url ('img/icons8-editar.gif') }}" width="25">
                    </a>

                    <form action="{{ route('categorias.destroy', $categoria->id) }}" metohd="POST">

                        @csrf
                        @method("DELETE")
                        <button class="btn bnt-danger" onclicks="return confirm('¿Quiere eliminar el reegistro?')">
                            <img src="{{ url('img/icons8-borrar-100.png') }}" width="25">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ url('js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('js/localization/messages_es.min.js') }}"></script>

    <script>
        $("#form").validate({
            rules: {
                nombre:{
                    requiered:true,
                    maxlenght:50
                },
                descripcion:{
                    required:true,
                    maxlenght:200
                }
            }
        });
    </script>
@stop()