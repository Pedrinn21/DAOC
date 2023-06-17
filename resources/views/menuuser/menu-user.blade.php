
@yield('dropdown1')
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