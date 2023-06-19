<script>
    function popup(){
        varWindow = window.open('popup.html', 'popup')
    }




</script>



@extends('home/master')

@section('master')


@if($lixo)

    @if(session()->has('message'))
        <div class="popup" id>
            <p>teste</p>

        </div>
        {{session()->get('message')}}
    @endif
    <p>
    

        <h1>{{$lixo->nome}}</h1>
        <h2>Tipo Lixo</h2>
        {{$lixo->tipolixo}}
        <h2>Informações Lixo</h2>
        {{$lixo->infolixo}}
        <h2>Características</h2>
        {{$lixo->carac}}
        <h2>Descarte</h2>
        {{$lixo->descarte}}
    </p>

    <div>
        @auth
            <a href="{{route ('create.list', ['user' => auth()->user(), 'lixo' => $lixo])}}">Favorite</a>
        @endauth
    </div>

    <div>
        <a type="button" href="{{route('home')}}">Voltar</a>
    </div>
    

    
@endif
