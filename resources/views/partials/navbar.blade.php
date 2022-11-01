<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="m-0">LSB</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">
                    Inicio
                </a>
                <a href="#about" class="nav-item nav-link">
                    About
                </a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Aprender
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/l_inicio') }}" class="dropdown-item">
                            Lenguaje de Señas
                        </a>
                        <a href="{{ url('/b_inicio') }}" class="dropdown-item">
                            Sistema de Escritura Braille
                        </a>
                    </div>
                </div>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                        @else
                            
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <a class="nav-link" href="#"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        
                        @endguest
                    </ul>
            </div>
    </nav>