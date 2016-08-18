@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Eventos</h1>


            @foreach($eventos as $eventos)


                <div class="container">




                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-default coupon">
                                <div class="panel-heading" id="head">
                                    <div class="panel-title" id="title">
                                        <img src="{{ asset('css/image/copasalog.jpg')}}">
                                        <span class="hidden-xs">{{ $eventos->nomeeventos }}</span>
                                        <span class="visible-xs">{{ $eventos->nomeeventos }}</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="{{ asset('css/image/eventoteste.jpg')}}" class="coupon-img img-rounded">
                                    <div class="col-md-9">
                                        <ul class="items">
                                            <li> Data Início {{ date('d/m/Y', strtotime($eventos->datainicioeventos)) }}</li>

                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="offer">
                                            <span class="usd"><sup>$</sup></span>
                                            <span class="cents">{{ $eventos->valoreventos }}</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="disclosure"></p>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="coupon-code">
                                        Code: {{ $eventos->id }}
                                        <span class="print">
                                            <a href="{{ route('matricula.create',['id'=>$eventos->id]) }}" class="btn btn-link"><i class="fa fa-lg fa-plus"></i> Matricular-se</a>
                                         </span>
                                    </div>
                                    <div class="exp">Término em:{{ date('d/m/Y', strtotime($eventos->dataterminoeventos)) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



    </div>



@endsection