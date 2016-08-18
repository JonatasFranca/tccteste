@extends('app')

@section('content')
    <div class="container">
        <h1>Usuarios</h1>
        <a href="{{ route('usuario.create') }}" class="btn btn-default">Novo usuario</a>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Create</th>
            </tr>
            </thead>
            <tbody>

            @foreach($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->name }}</td>
                    <td>{{ $usuarios->email }}</td>
                    <td>{{ $usuarios->fotousuario }}</td>
                    <td>{{ $usuarios->created_at }}</td>
                    <td> <a href="{{ route('eventos.edit',['id'=>$usuarios->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('eventos.destroy',['id'=>$usuarios->id]) }}" class="btn-sm btn-danger">Remover</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection