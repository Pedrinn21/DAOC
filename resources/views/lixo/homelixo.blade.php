



@if($lixo)

    <p>
        <h1>{{$lixo->nome}}</h1>
        <h2>Tipo Lixo</h2>
        {{$lixo->tipolixo}}
        <h2>Informações Lixo</h2>
        {{$lixo->infolixo}}
    </p>
    <a href=""></a>

    
@endif


<?php 
/*
<form action="">
    <input type="text" name="nome" value="{{$lixo->nome}}">
    <input type="text" name="infolixo" value="{{$lixo->infolixo}}">
</form>*/
?>