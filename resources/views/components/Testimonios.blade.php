<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .container {
        margin: 0;
    }
    .card {
        border-width: 1px;
        border-color: purple;
        border-style: solid;
        padding: 13px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }

    .card-title,
    .card-text {
        color: purple;
    }

    .btn-whatsapp,
    .btn-details {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
        color: white;
    }

    .btn-whatsapp {
        background-color: #4fc931;
    }

    .btn-whatsapp:hover {
        background-color: #45b82b;
    }

    .btn-details {
        background-color: #007bff;
    }

    .btn-details:hover {
        background-color: #0056b3;
    }

    .btn-whatsapp .fab,
    .btn-details .fas {
        margin-right: 10px;
        font-size: 20px;
    }

    .show-more {
        color: blue;
        cursor: pointer;
        margin-left: 5px;
    }

    .button-container {
        margin-bottom: -20px;
        display: flex;
        justify-content: center;
        gap: 10px; /* Espacio entre botones */
    }
    .centrado {
        display: flex;
        justify-content: center;
        justify-items: center;
    }
    .img-fluid {
        width: 80%
    }
</style>

<div class="container">
    <div class="row">
        @foreach($testimonios as $testimonio)
            @if($testimonio->estado !== 'Inactivo')
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="centrado">
                        <h3 class="card-title">{{ $testimonio->producto_servicio }}</h3>

                        </div>
                        <div class="centrado">
                            <img src="{{ $testimonio->imagen }}" alt="{{ $testimonio->nombre }}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="centrado">
                                <h5 class="card-title">{{ $testimonio->titulo }}</h5>
                            </div>
                            @if (Str::endsWith($testimonio->video, '.mp4'))
                                <video width="100%" controls>
                                    <source src="{{ asset($testimonio->video) }}" type="video/mp4">
                                    Tu navegador no soporta la etiqueta de video.
                                </video>
                            @elseif (Str::endsWith($testimonio->video, '.mp3'))
                                <audio width="100%" controls>
                                    <source src="{{ asset($testimonio->video) }}" type="audio/mpeg">
                                    Tu navegador no soporta la etiqueta de audio.
                                </audio>
                            @endif
                            <div class="centrado">
                                <h5 class="card-title">{{ $testimonio->nombre }}</h5>
                            </div>
                            
                            
                            
                            {{-- <div class="button-container">
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

