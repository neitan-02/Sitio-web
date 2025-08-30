<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ secure_asset('css/register.styles.css') }}">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h2></h2>
        <h3 class="text-center text-white pt-5" style=" filter: drop-shadow(1px 1px 20px white)">
            <img class="text-center text-white pt-5" style="filter: drop-shadow(1px 1px 17px white); height: 180px; widht: 180px; margin: -90px;"  src="{{ asset('favicons/favicon.ico') }}" alt="">
        </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="register-form" class="form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="centrado">
                                <h3 class="color-letra">Registrate</h3>
                            </div>

                            <div class="form-group">
                                <label for="name" class="color-letra">Nombre:</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="color-letra">Correo:</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="color-letra">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="color-letra">Confirma Contraseña:</label>
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <button id="submit" type="submit" class="btn btn-info btn-md">Registrate</button>
                                <div id="login-link" class="text-right" style="margin-bottom: 50px; margin-top: -60px">
                                    <a href="{{ route('login') }}" class="color-letra">Inicia Sesión</a>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
