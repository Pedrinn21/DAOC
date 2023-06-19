@extends('home/master')

@section('master')

<body>
    @if($lista)
        <div class="container">
        @foreach($lista as $list)
            <div class="card">
        
            <h1>{{$list->nome}}</h1>
        
            <h3>{{$list->carac}}</h3>
            <br>

            <p class="card-content">
                <h4> Informação do Lixo </h5>
            {{Str::limit($list->infolixo, 200, '...') }}
            <br>
            <br>
            <h4> Precauções ao descartar</h4>
            {{Str::limit($list->descarte, 200, '...') }}
                </p>
                <h5 class="align-right"><a href="/search?search={{ urlencode($list->nome) }}" >mais informações </a></h5>
            </div>
            <br>
            <br>
            <div>
                

            </div>

        @endforeach

    

        <div>
            <a type="button" href="{{route('home')}}">Voltar</a>
        </div>

    
    
    @endif
</body>
