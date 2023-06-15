<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=firefox">
        <title>HTML5 – Estrutura básica</title>
    </head>

    <body>
        <div class="container">
            @yield('content')

            @auth
            <a href="/dashboard">Lista</a>
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
            </form>
            @endauth
            @guest
            <a href="/login">Log in</a>
            <a href="/register">Log on</a>
            @endguest

            <form>
                    <input type="search">
                    <button type="submit">Pesquisar</button>
                </form>
        </div>

    </body>

</html>
