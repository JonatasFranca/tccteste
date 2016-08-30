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

        {!! Form::open(array('route' => 'eventos.store','enctype' => 'multipart/form-data'))!!}
        <div class="form-group">
            {!! Form::label('nomeeventos', 'Nome:') !!}
            {!! Form::text('nomeeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valoreventos', 'Valor:(100,00)') !!}
            {!! Form::text('valoreventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('datainicioeventos', 'Data Inicio:(2016-12-12)') !!}
            {!! Form::text('datainicioeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dataterminoeventos', 'Data Término:(2016-12-12)') !!}
            {!! Form::text('dataterminoeventos', null, ['class'=>'form-control data']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('arquivoeventos', 'Url do Vídeo:') !!}

            {!! Form::text('arquivoeventos', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('vagas', 'Vagas:') !!}
            {!! Form::text('vagas', null, ['class'=>'form-control data']) !!}
        </div>
        <div class="image">
            {!! Form::label('image', 'Imagem:(.jpg)') !!}
            {!! Form::file('image', array('class' => 'image')) !!}

        </div>
        <div class="form-group">
            {!! Form::label('pdf', 'PDF:') !!}
            {!! Form::file('pdf', array('class' => 'file')) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Criar Evento', ['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}
    </div>
@endsection