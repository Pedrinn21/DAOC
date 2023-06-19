@extends('home/master')

@section('master')

<body>
    @if($lista)
        <div class="container">
        @foreach($lista as $list)
            <div class="card">
            <h2> {{$list->nome}}</h2>
               <br>
        
            <h1>{{$list->nome}}</h1>
        
            <h3>{{$list->carac}}</h3>
            <br>

            <p class="card-content">
                <h4> Informação do Lixo </h5>
            {{Str::limit($list->infolixo, 200, '...') }}
            <h2>Características</h2>
            {{$list->carac}}

            <br>
            <br>
            <h4> Precauções ao descartar</h4>
            {{Str::limit($list->descarte, 200, '...') }}
                </p>
                <h5 class="align-right"><a href="http://127.0.0.1:8000/search?search={{ urlencode($list->nome) }}" >mais informações </a></h5>
            </div>
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
</body>
