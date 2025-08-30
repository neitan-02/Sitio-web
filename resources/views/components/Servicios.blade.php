<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
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

    .discount-badge {
        margin: 0;
        position: absolute;
        top: 0px;
        right: 0px;
        background-color: red;
        color: white;
        padding: 5px;
        border-radius: 0 0 0 10px;
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

    /* Modificar esta parte en tu CSS */
    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px; /* Espacio entre botones */
    }

    .btn-whatsapp,
    .btn-details {
        width: 80%; /* Ancho del 80% */
        display: block; /* Para que los botones sean bloques y se centren */
        text-align: center; /* Centrar el texto dentro del botón */
        margin: 10px auto; /* Centrarlos horizontalmente */
    }

    .show-more {
        color: blue;
        cursor: pointer;
        margin-left: 5px;
    }
</style>

<div class="container">
    <div class="row">
        @foreach($services as $service)
            @if($service->status !== 'Inactivo')
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-top position-relative">
                            <a href="{{ route('service.detail', ['id' => $service->id]) }}">
                                <img src="{{ $service->photo }}" alt="{{ $service->name }}" class="img-fluid">
                            </a>
                            @if($service->status === 'Oferta')
                                <div class="discount-badge">
                                    {{ $service->discount_percentage }}% de descuento
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('service.detail', ['id' => $service->id]) }}" style="color: inherit; text-decoration: none;">
                                    {{ $service->name }}
                                </a>
                            </h5>
                            <p class="card-text">
                                <span class="short-text">{{ Str::limit($service->description, 100, '...') }}</span>
                                <span class="full-text" style="display:none;">{{ $service->description }}</span>
                                @if (strlen($service->description) > 120)
                                    <span class="show-more" onclick="showMore(this)">más</span>
                                @endif
                            </p>
                            <div class="button-container">
                                <a href="https://api.whatsapp.com/send?phone=7224958550&amp;text=Me%20gustaría%20saber%20más%20sobre {{ $service->name }}" class="btn btn-whatsapp">
                                    <i class="fab fa-whatsapp"></i> Agenda
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

<script>
    function showMore(element) {
        let shortText = element.previousElementSibling;
        let fullText = element.previousElementSibling.previousElementSibling;

        if (fullText.style.display === "none") {
            fullText.style.display = "inline";
            shortText.style.display = "none";
            element.innerText = "...más";
        } else {
            fullText.style.display = "none";
            shortText.style.display = "inline";
            element.innerText = "menos";
        }
    }
</script>
