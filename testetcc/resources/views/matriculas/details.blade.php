@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default coupon">
                    <div class="panel-heading" id="head">
                        <div class="panel-title" id="title">
                                <h1>Detalhes sobre sua matrícula no {{ $matriculas->eventos->nomeeventos}} </h1>
                                <h1>Nome do Evento: {{ $matriculas->eventos->nomeeventos}}</h1>
                                <h2>Valor: {{ $matriculas->eventos->valoreventos}} </h2>
                                <h2>Data de Início: {{ date('d/m/Y', strtotime($matriculas->eventos->datainicioeventos)) }}</h2>
                                <h2>Data de Término: {{ date('d/m/Y', strtotime($matriculas->eventos->dataterminoeventos)) }}</h2>
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe width="854" height="480" src="{{$matriculas->eventos->arquivoeventos}}" frameborder="0" allowfullscreen></iframe>
                            </div>
                                @if ($errors->any())
                                    <ul class="alert alert-warning">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif




                            <div class="contact-form">

                                {!! Form::open(['route'=>'eventos.sendEmail','method'=>'POST']) !!}

                                    {!! Form::hidden('name', Auth::user()->name ) !!}
                                    {!! Form::hidden('email', Auth::user()->email) !!}
                                    {!! Form::hidden('evento',$matriculas->eventos->nomeeventos) !!}
                                    {!! Form::hidden('data',$matriculas->eventos->datainicioeventos) !!}
                                    {!! Form::submit('Receber detalhes por email') !!}
                                {!! Form::close() !!}
                            </div>

                            <div><a href="{{ route('matricula.lista') }}" class="btn-sm btn-primary">Lista de Matrículas</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection