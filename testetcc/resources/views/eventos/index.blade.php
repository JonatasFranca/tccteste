@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Eventos</h1>
        <a href="{{ route('eventos.create') }}" class="btn btn-default">Novo evento</a>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Início</th>
                <th>Término</th>
                <th>Valor</th>
                </tr>
            </thead>
            <tbody>

            @foreach($eventos as $eventos)
                <tr>
                    <td>{{ $eventos->nomeeventos }}</td>
                    <td>{{date('d/m/Y', strtotime($eventos->datainicioeventos)) }}</td>
                    <td>{{date('d/m/Y', strtotime($eventos->dataterminoeventos)) }}</td>
                    <td>{{ $eventos->valoreventos }}</td>
                    <td> <a href="{{ route('eventos.edit',['id'=>$eventos->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('eventos.destroy',['id'=>$eventos->id]) }}" class="btn-sm btn-danger">Remover</a>

                        <a href="{{ route('matricula.chamada',['id'=>$eventos->id]) }}" class="btn-sm btn-default">Lista de Matriculados</a>
                        <a href="{{ route('matricula.presenca',['id'=>$eventos->id]) }}" class="btn-sm btn-default">Confirmar presença</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
         </table>
        <a href="{{ route('eventos.graficos') }}" class="btn-sm btn-primary">Gráfico dos Eventos</a>
        <a href="{{ route('matricula.grafico',['id'=>$eventos->id]) }}" class="btn-sm btn-primary">Grafico dos Usuários por sexo</a>
    </div>



@endsection