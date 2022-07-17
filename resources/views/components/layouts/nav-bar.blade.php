<nav class="navbar">
    <div class="logo">
        <a href="/home">
            <img src="{{ asset('img/scheduler-logo.svg') }}" alt="scheduler-logo" class="logo-img" />
            <p class="logo-text">Scheduler</p>
        </a>
    </div>
    <ul class="navLinks">
        @if($user->isAdmin())
            <li><a href="{{ route('users') }}">Usuarios</a></li>     
        @endif
        <li><a href="{{ route('shifts') }}">Turnos</a></li>
        <li><a href="{{ route('disponibilities') }}">Disponibilidad</a></li>
        <li>
            <a href="{{ route('logout') }}">
                <img src="{{ asset('img/logout.svg') }}" alt="logout-ico" class="logout" />
            </a>
        </li>
    </ul>
</nav>