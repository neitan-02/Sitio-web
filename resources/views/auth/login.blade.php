<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ secure_asset('css/login-styles.css') }}">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h2></h2>
        <h3 class="text-center text-white pt-5" style="filter: drop-shadow(1px 1px 20px white)">
            <img id="logo" class="text-center text-white pt-5" src="{{ asset('favicons/favicon.ico') }}" alt="">
        </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-12">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="centrado">
                                <h3 id="iniciar">Inicia Sesión</h3>
                            </div>
                            <div class="form-group">
                                <label for="email" class="color-letra" style="margin-top: 15px;">Correo:</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="color-letra" for="password">Contraseña:</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button id="submit" type="submit" class="btn btn-info btn-md">Inicia Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>