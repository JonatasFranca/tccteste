@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Usuario</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'usuario.store'])!!}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Senha:') !!}
            {!! Form::password('password', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('arquivoeventos', 'Arquivo:') !!}

            {{ Form::file('arquivoeventos', ['class' => 'field']) }}
        </div>


        <div class="form-group">
            {!! Form::submit('Criar Usuario', ['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}
    </div>
@endsection