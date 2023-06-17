
{{auth()->user()->id}}
<br>
<br>
<br>
<br>

@if($lixo)

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <p>
        {{$lixo->id}}
        <h1>{{$lixo->nome}}</h1>
        <h2>Tipo Lixo</h2>
        {{$lixo->tipolixo}}
        <h2>Informações Lixo</h2>
        {{$lixo->infolixo}}

        @auth
            <a href="{{route ('create.list', ['user' => auth()->user(), 'lixo' => $lixo])}}">Favorite</a>
        @endauth
    </p>
    

    
@endif


<?php 
/*
<a href="{{route ('create.list', ['user' => auth()->user()->id], ['lixo' => $lixo->id])}}">Favorite</a>
<form action="">
    <input type="text" name="nome" value="{{$lixo->nome}}">
    <input type="text" name="infolixo" value="{{$lixo->infolixo}}">
</form>*/
?>