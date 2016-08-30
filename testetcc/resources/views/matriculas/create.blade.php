@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default coupon">
                    <div class="panel-heading" id="head">
                        <div class="panel-title" id="title">




                                <h1>Matricule-se </h1>
                                <h1>Nome do Evento: {{$eventos->nomeeventos}}</h1>
                                <h2>Valor: {{$eventos->valoreventos}}</h2>
                                <h2>Data de Início: {{ date('d/m/Y', strtotime($eventos->datainicioeventos)) }}</h2>

                                @if ($errors->any())
                                    <ul class="alert alert-warning">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                {!! Form::open(['route'=>'matricula.store'])!!}
                                {!! Form::hidden('eventos_id', $eventos->id) !!}
                                {!! Form::hidden('user_id', Auth::user()->id) !!}


                            @if($total <= $eventos->vagas)
                                <div class="form-group">
                                    {!! Form::submit('Matricular', ['class'=>'btn btn-primary']) !!}
                                </div>
                            @else
                                <font color="red"><h1 COLOR="red">Não há vagas</h1></font>
                            @endif
                                {!! Form::close() !!}
                        </div>
                        <a class="btn btn-default" href="{{ url('/') }}">
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection