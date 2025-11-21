@extends('layout')
@section('title','Usuarios')
@section('content')

    <h3 class = "mt-4">Listado De usuarios</h3>
    <div class="text-end">
        <a href="{{url('usuarios/create')}}" class="btn btn-primary">Nuevo</a>
    </div>

    @if(session('type'))
        <div class = "alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
            <strong>Noticia:</strong>{{session('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>DocumentoId</th>
            <th>Password</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($datos as $usuario)
                <tr>
                    <td>
                        {{ $usuario ->nombre}}
                    </td>
                    <td>
                        {{ $usuario ->apellidos}}
                    </td>
                    <td>
                        {{ $usuario ->correo}}
                    </td>
                    <td>
                        {{ $usuario ->telefono}}
                    </td>
                    <td>
                        {{ $usuario ->direccion}}
                    </td>
                    <td>
                        {{ $usuario ->DocumentoId}}
                    </td>
                    <td>
                        {{ $usuario ->password}}
                    </td>
                    
                    <td>
                        
                        <a href="{{route('usuarios.edit',$usuario->id)}}" class ="btn btn-info">
                            Editar
                        </a> 

                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" onclicks="return confirm('¿Quiere eliminar el reegistro?')">
                                Eliminar
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
                apellidos:{
                    required:true,
                    maxlenght:100
                },
                correo:{
                    required:true,
                    maxlenght:150
                },
                telefono:{
                    required:true,
                    maxlenght:10
                },
                direccion:{
                    required:true,
                    maxlenght:100
                },
                DocumentoId:{
                    required:true,
                    maxlenght:11
                },
                password:{
                    required:true,
                    maxlenght:100
                }
            }
        });
    </script>
@stop()