@include('partials.login_head')
<html>
<body>

<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form" action="{{ route('login') }}">
            @csrf
            <h2 class="title">Inicio de Sesion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>

              <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>

              <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            </div>
           
            <label class="form-check-label" for="remember"> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Recuerdame') }}
            </label>

            <button type="submit" class="btn solid">
            {{ __('Inicia Sesion') }}
            </button>

          </form>
    
          <form method="POST" class="sign-up-form" action="{{ route('register') }}">
            @csrf
                <h2 class="title">Registrarse</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>

                  <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>



                </div>
                <div class="input-field">
                  <i class="fas fa-envelope"></i>

                  <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>

                  <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">



                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>

                <input id="password-confirm" placeholder="Repita la contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          
                </div>
                <button type="submit" class="btn">
                    {{ __('Registrarse') }}
                </button>
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
          <img src="{{ asset('img/log.svg') }}" class="image" alt="" />
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
          <img src="{{ asset('img/target.png') }}" class="image" alt="" />
        </div>
      </div>
  </div>

    <script src="{{ asset('js/app_login.js') }}"></script>
</body>
</html>
  
