@extends('app')

@section('content')
    <div class="container" align="center">







        <div class="divTable" style="width: 30%;border: 9px solid #000;" >
            <div class="divTableBody">
                <div class="divTableRow">
                    <h1> {{ $matriculas->user->name}} </h1>
                    <h1>Evento: {{ $matriculas->eventos->nomeeventos}}</h1>
                </div>
                <div class="divTableRow">
                    <h2>Data de Início: {{ date('d/m/Y', strtotime($matriculas->eventos->datainicioeventos)) }}</h2>
                    <h2>Data de Término: {{ date('d/m/Y', strtotime($matriculas->eventos->dataterminoeventos)) }}</h2>
                </div>
            </div>
        </div>

    </div>

@endsection