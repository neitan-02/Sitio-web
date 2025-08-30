<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/brand/Spa-1.jpg') }}" sizes="16x16 24x24 32x32 48x48" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/brand/Spa-1.jpg') }}" sizes="16x16 24x24 32x32 48x48" />
    <link rel="apple-touch-icon" href="{{ asset('img/brand/Spa-1.jpg') }}" />
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Evitar scroll horizontal */
            
        }
        .centrado {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            box-sizing: border-box;
        }
        .entry-content {
            max-width: 100%;
        }
        .background-section {
            display: flex;
            justify-content: flex-end; /* Alinea los elementos al final del contenedor */
            padding-bottom: -35%;
            background: url('{{ asset('images/11.jpg') }}'); 
            background-size: cover; 
            background-position: center; 
            margin: 0 0 10%; 
        }
        .centrado-form {
            display: flex;
            justify-content: center;
            align-items: center; /* Centra el contenido verticalmente en su contenedor */
            width: 40%; /* Ocupa el 50% del ancho del contenedor padre */
        }
        @media (max-width: 768px) {
        .background-section {
            padding: 0 20px; /* Menos padding para móviles */
            background: none; 
            background-size: cover; 
        }

        .centrado-form {
            width: 100%; /* Ocupa todo el ancho del contenedor en móviles */
            justify-content: center; /* Centra el contenido horizontalmente en móviles */
        }
    }
    </style>
</head>
<body class="page-template-default page page-id-6 logged-in admin-bar no-customize-support wp-embed-responsive customizer-styles-applied singular image-filters-enabled hide-homepage-title mobile-nav-side jetpack-reblog-enabled has-launch-banner" style="background-color: #fbfbfb;">
    <div id="page" class="site">
        <x-Navegacion/>
        <div id="content" class="site-content">
            <section id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry entry">
                        <div class="background-section">
                            <div class="centrado-form">
                                @include('components.Contacto', ['services' => $services])
                            </div>
                        </div>
                        <hr class="wp-block-separator is-style-wide" style="color: black; width: 100%;" />
                        <x-Ubicacion/>
                        <div style="height:32px; display: flex; justify-content: center;" aria-hidden="true" class="wp-block-spacer desktop-only"></div>
                        <x-LinkServices/>
                    </article>
                </main>
            </section>
        </div>
        <x-Footer/>
    </div>
</body>
</html>
