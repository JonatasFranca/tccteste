@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Evento: {{$eventos->nomeeventos}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['eventos.update', $eventos->id],'enctype' => 'multipart/form-data', 'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nomeeventos', 'Nome:') !!}
            {!! Form::text('nomeeventos',$eventos->nomeeventos, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valoreventos', 'Valor:') !!}
            {!! Form::text('valoreventos', $eventos->valoreventos, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('datainicioeventos', 'Data Inicio:') !!}
            {!! Form::text('datainicioeventos', $eventos->datainicioeventos, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dataterminoeventos', 'Data Término:') !!}
            {!! Form::text('dataterminoeventos', $eventos->dataterminoeventos, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('arquivoeventos', 'Video') !!}
            {!! Form::text('arquivoeventos', $eventos->arquivoeventos, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('vagas', 'Vagas') !!}
            {!! Form::text('vagas', $eventos->vagas, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', "Imagem") !!}
            {!! Form::file('image', ['class'=>'image']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('pdf', "PDF") !!}
            {!! Form::file('pdf', ['class'=>'file']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar alterações', ['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}
    </div>
@endsection