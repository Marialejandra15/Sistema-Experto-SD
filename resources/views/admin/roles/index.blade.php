@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
<div class="alert alert-primary" role="alert">
    <strong>Well done!</strong> You successfully read this
    important alert message.
</div>
<div class="card">
    <div class="card-header">
    <a href="{{route('admin.roles.create')}}"> Crear Curso </a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>

            </thead>
            <tbody>
                @forelse($roles as  $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>

                    <td width="20px">
                        <a class = "btn btn-secondary"href="{{route('admin.roles.edit', $role)}}">Editar</a>
                    </td width="20px">

                    <td>
                        <form action = "{{route('admin.roles.destroy', $role)}}"method ="POST">
                        @method('delete')
                        @csrf
                        <button class = "btn btn-danger" type = "submit"> Eliminar </button> 
                    </form>
                    </td>
                </tr>
                    
                @empty
                <tr>
                    <td colspan ="4">No hay ningun rol registrado </td>
                </tr>
                    
                @endforelse

            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
