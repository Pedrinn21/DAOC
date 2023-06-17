@if($lista)
    @foreach($lista as $list)
        -{{$list->nome}}-
        -{{$list->tipolixo}}-
        -{{$list->infolixo}}-
        -{{$list->carac}}-
        -{{$list->descarte}}-
        <br>
        <br>

    @endforeach
    
@endif