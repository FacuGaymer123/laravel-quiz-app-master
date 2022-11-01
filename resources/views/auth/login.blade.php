

@include('partials.menu_head')

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

@include('partials.navbar')

<body>

<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form method="POST" class="sign-in-form" action="{{ route('login') }}">
        @csrf
            <h2 class="title">Inicio de Sesion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>

              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>

              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
           
            <label class="form-check-label" for="remember"> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
            </label>

            <button type="submit" class="btn solid">
            {{ __('Login') }}
            </button>

          </form>
          
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>

              <input type="text" placeholder="Username" />

            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>

              <input type="email" placeholder="Email" />

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>

              <input type="password" placeholder="Password" />

            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres nuevo aqui?</h3>
            <p>
              Te damos la bienvenida, pero primero tienes que crearte una cuenta!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Crear Cuenta
            </button>
          </div>
          <img src="{{ asset('img/log.svg') }}" class="images" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>
                muy bien capo, pero anda al inicio de sesion
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicia de sesion
            </button>
          </div>
          <img src="{{ asset('img/register.svg') }}" class="images" alt="" />
        </div>
      </div>
    </div>
</body>

    <script src="{{ asset('js/app_login.js') }}"></script>

@include('partials.lib_js')