<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
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
                                Lenguaje de señas
                            </a>
                            <a href="{{ url('/b_inicio') }}" class="dropdown-item">
                                Braille
                            </a>
                        </div>
                    </div>
                    @guest
                    <a href="{{ route('login') }}" class="nav-item nav-link">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="nav-item nav-link">
                        Register
                    </a> 
                    @endguest
            </div>
        </nav>