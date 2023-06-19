@extends('home/master')

@section('master')

@if($lista)
    
    @foreach($lista as $list)
        <h2>ID = {{$list->list_id}}</h2>
        
        <h1>{{$list->nome}}</h1>
        
        <h2>Tipo Lixo</h2>
        {{$list->tipolixo}}

        <h2>Informações do Lixo</h2>
        {{$list->infolixo}}

        <h2>Características</h2>
        {{$list->carac}}

        <h2>Descarte</h2>
        {{$list->descarte}}
        <br>
        <br>
        <div>
            <a type="button" href="{{ route ('delete.list', ['list' => $list->list_id])}}">Desfavoritar</a>

        </div>

    @endforeach

    

    <div>
        <a type="button" href="{{route('home')}}">Voltar</a>
    </div>

    
    
@endif