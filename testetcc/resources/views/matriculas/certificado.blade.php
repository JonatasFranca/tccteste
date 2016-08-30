@extends('app')

@section('content')
    <div class="container" align="center" >


        <h1  style="font-size: 72px">Certificado</h1>
        <p style="font-size: 40px">Certificamos que </p>
        <p style="font-size: 60px" font-family="Courier New Bold" >{{ $matriculas->user->name}}</p>
        <p style="font-size: 30px">participou do {{ $matriculas->eventos->nomeeventos }} na Copasa de Mata Verde,</p>
        <p style="font-size: 30px">realizado no dia {{ date('d/m/Y', strtotime($matriculas->eventos->datainicioeventos)) }} até o dia {{ date('d/m/Y', strtotime($matriculas->eventos->dataterminoeventos)) }}. </p>

        <img src='css/image/copasalog.jpg' alt="Smiley face" height="140" width="200">


    </div>

@endsection