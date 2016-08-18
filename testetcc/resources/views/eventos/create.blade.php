@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Evento</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'eventos.store','enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {!! Form::label('nomeeventos', 'Nome:') !!}
            {!! Form::text('nomeeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valoreventos', 'Valor:') !!}
            {!! Form::text('valoreventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('datainicioeventos', 'Data Inicio:') !!}
            {!! Form::text('datainicioeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dataterminoeventos', 'Data Término:') !!}
            {!! Form::text('dataterminoeventos', null, ['class'=>'form-control data']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('arquivoeventos', 'Arquivo:') !!}

            {!! Form::text('arquivoeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="image">
            {!! Form::label('image', 'Imagem:') !!}
            {!! Form::file('image', array('class' => 'image')) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Criar Evento', ['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}
    </div>
@endsection