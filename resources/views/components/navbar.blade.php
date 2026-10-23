<nav class="navbar navbar-expand-lg navSettings" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center me-auto" href="{{ route('homepage') }}">
            <span class="scrittaRental">RENT</span>
            <img src="{{ asset('immagini/rental3.png') }}" alt="Logo" class="logoNav">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link chiSiamo active chiSiamoSmall text-white" aria-current="page"
                        href="{{ route('about') }}">Chi siamo</a>
                </li>
                <li class="nav-item dropdown prezziSm">
                    <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Prezzi e info abbonamenti
                    </a>
                    <ul class="dropdown-menu prezziMenu">
                        <li><a class="dropdown-item text-white" href="{{ route('giorno') }}">Giornaliero</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('settimana') }}">Settimanale</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('mese') }}">Mensile</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown citySm">
                    <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Città
                    </a>
                    <ul class="dropdown-menu cittaMenu">
                        <li><a class="dropdown-item text-white" href="{{ route('milano') }}">Milano</a></li>
                        <li><span class="dropdown-item text-secondary disabled" aria-disabled="true">Prossimamente...</span></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white abbonamentoSm" aria-current="page"
                        href="{{ route('abbonamenti') }}">Acquista
                        abbonamento</a>
                </li>
                <li class="nav-item ms-lg-auto ticketBack">
                    <a class="nav-link active me-3 ticketLink" aria-current="page" href="{{ route('pagamento') }}">
                        <i class="fa-solid fa-ticket iconaTicket"></i>
                        <span id="cart-counter" class="ticketListner translate-middle badge"></span>
                    </a>
                </li>
                <li class="nav-item backProfilo">
                    <a class="profilo nav-link active text-white" aria-current="page" href="#">
                        @auth
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        @endauth
                    </a>
                    <span class="testoUtente">Bentornato @auth {{ Auth::user()->name }} @else Nome @endauth</span>
                    @auth
                        <li class="nav-item logoutBack">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Confermi disconnessione?');">
                                @csrf
                                <button type="submit" class="nav-link text-center logout p-1 active">Logout</button>
                            </form>
                        </li>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>