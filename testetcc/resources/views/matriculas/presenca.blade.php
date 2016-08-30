@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Atualize os funcionários presentes no Evento: {{ $eventos->nomeeventos}} </h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Presença</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
           


            @foreach($eventos->matriculas as $matricula)

                <tr>
                    <td>{{ $matricula->user->name }}</td>
                    <td>
                        <?php
                        $n = '2';
                        ?>
                        @if ($matricula->presenca == $n)
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                        @else
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>

                        @endif
                    </td>
                    <td><a href="{{ route('matricula.edit',['id'=>$matricula->id]) }}" class="btn-sm btn-primary">Editar presença</a></td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection