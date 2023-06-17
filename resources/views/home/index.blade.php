@extends('home/master')

@section('master')

@auth
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="">Profile</a></li>
    <li> <a href="/homelist">Lista</a></li>
    <li><form action="/logout" method="POST">
            @csrf
            <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
        </form>
    </li>        
</ul>
@endauth

@guest
<a href="/login">Log in</a>
<a href="/register">Log on</a>
@endguest


<form action="/search" method="get">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procure um lixo">
    <button type="submit">Pesquisar</button>


</form>