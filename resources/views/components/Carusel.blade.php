<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <style>
        .boton {
            border-radius: 10px;
            background-color: #a7f176;
            color: white;
            justify-content: center;
            justify-items: center; 
            padding: 15px 20px;
            margin: 25px 10px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none; /* Quita el subrayado del texto */
        }

        .boton:hover {
            border-radius: 10px;
            background-color: rgb(46, 78, 25);
            color: white;
            justify-content: center;
            justify-items: center; 
            padding: 15px 20px;
            margin: 25px 10px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none; /* Quita el subrayado del texto */
        } 
    </style>
</head>
<body>

    <div class="container py-4">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="8" aria-label="Slide 9"></button>

            </div>

            <div class="carousel-inner carousel-fade">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Acupuntura.jpg') }}" alt="First slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 1]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/SPA.jpg') }}" alt="Second slide">
                    <div class="carousel-caption">  
                        <a class="boton" href="{{ route('service.detail', ['id' => 2]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/12.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 3]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Tarot.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 4]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Rehabilitacion.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 5]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Nutricion.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 6]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Medicina Alternativa.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 7]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/Armonización.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 8]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block w-100" src="{{ asset('images/healy.jpg') }}" alt="Third slide">
                    <div class="carousel-caption">
                        <a class="boton" href="{{ route('service.detail', ['id' => 9]) }}">Ver Servicio</a>
                        <h1></h1>
                    </div>
                </div>
            </div>
            <!-- Control buttons (Optional) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
