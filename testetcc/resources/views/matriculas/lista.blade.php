@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Meus Eventos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Matrícula</th>
                <th>Evento</th>
                <th>Certificado</th>
                <th></th>
            </tr>
            </thead>
            <tbody>


            @foreach($matriculas as $matricula)
                @if ($matricula->user_id == Auth::user()->id)
                    <tr>
                        <td>{{ $matricula->id }}</td>

                        <td>{{ $matricula->eventos->nomeeventos}}</td>


                        <td>

                                <?php
                                $n = '2';
                                ?>
                                @if ($matricula->presenca == $n)
                                        <a href="{{ route('matricula.certificado',['id'=>$matricula->id]) }}" class="btn-sm btn-success"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Disponível </a>

                                @else
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true">Indisponível</span>

                                @endif


                        </td>
                        <td>
                            <a href="{{ route('matricula.details',['id'=>$matricula->id]) }}" class="btn-sm btn-primary">Detalhes</a>
                            <a href="{{ route('matricula.cracha',['id'=>$matricula->id]) }}" class="btn-sm btn-default">Imprimir crachá</a>
                            <a href="{{ route('matricula.destroy',['id'=>$matricula->id]) }}" class="btn-sm btn-danger">Cancelar matrícula</a>

                        </td>
                    </tr>

                @endif
            @endforeach

            </tbody>
        </table>
    </div>
@endsection