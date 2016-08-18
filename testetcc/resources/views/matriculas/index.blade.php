@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Usuarios</h1>
        <a href="{{ route('usuario.create') }}" class="btn btn-default">  <i class="fa fa-plus" aria-hidden="true"></i></a>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Matrícula</th>
                <th>Evento</th>

                <th></th>
            </tr>
            </thead>
            <tbody>


            @foreach($matriculas as $matricula)

                <tr>
                    <td>{{ $matricula->id }}</td>

                    <td>{{ $matricula->eventos->nomeeventos}}</td>


                    <td><a href="{{ route('matricula.details',['id'=>$matricula->eventos->id]) }}" class="btn-sm btn-primary">Detalhes</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection