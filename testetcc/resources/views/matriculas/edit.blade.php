@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Presença no Evento {{$matricula->eventos->nomeeventos}}</h1>
        <h2>aluno {{$matricula->user->name}}</h2>
        <h2>Presente?  <?php
            $n = '2';
            ?>
            @if ($matricula->presenca == $n)
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sim</button>

            @else
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Não</button>

            @endif</h2>
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['matricula.update', $matricula->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('presenca', 'Presença:') !!}
            {!! Form::select('presenca', array('1' => 'Nao', '2' => 'Sim')) !!}
            {!! Form::hidden('eventos_id', $matricula->eventos_id) !!}
            {!! Form::hidden('user_id', $matricula->user_id) !!}
        </div>




        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}

        </div>
        <div class="form-group">
            <a href="{{ route('matricula.presenca',['id'=>$matricula->eventos_id]) }}" class="btn btn-default">Voltar</a>

        </div>


        {!! Form::close() !!}
    </div>


@endsection