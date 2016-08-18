@extends('app')

@section('content')


    <div class="container" align="center" >
        <h1>Lista de Presença</h1>
        <h2>Evento: {{$eventos->nomeeventos}}</h2>


        <table border="1px">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome do aluno</th>
                <th>1º dia</th>
                <th>2º dia</th>
                <th>3º dia</th>
                <th>4º dia</th>
                <th>5º dia</th>
                <th>Assinatura do Coordenador</th>
            </tr>
            </thead>
            <tbody>


            @foreach($eventos->matriculas as $matricula)

                <tr>
                    <td>{{ $matricula->user_id }}</td>
                    <td>{{ $matricula->user->name }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>


@endsection