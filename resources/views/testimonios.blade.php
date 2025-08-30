<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimonios</title>
            <link rel="shortcut icon" type="image/x-icon" href= "{{ 'img/brand/Spa-1.jpg' }}"sizes="16x16 24x24 32x32 48x48" />
        <link rel="icon" type="image/x-icon" href= "{{ 'img/brand/Spa-1.jpg' }}" sizes="16x16 24x24 32x32 48x48" />
        <link rel="apple-touch-icon" href= "{{ 'img/brand/Spa-1.jpg' }}" />   
</head>
<body class="page-template-default page page-id-6 logged-in admin-bar no-customize-support wp-embed-responsive customizer-styles-applied singular image-filters-enabled hide-homepage-title mobile-nav-side jetpack-reblog-enabled has-launch-banner" style="background-color: #fbfbfb;" >
    <div id="page" class="site">

        <x-Navegacion/>
        <!-- #masthead -->
        <div id="content" class="site-content" style="background-color: #fbfbfb;">
            <section id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry entry">
                        <header class="entry-header responsive-max-width">
                            <h2 class="has-text-align-left wp-block-heading" style="color: #784F96; text-align: center;">Testimonios de Merrash</h2>

                        </header>
                        <div class="entry-content">
                            <p style="text-align:left; color: #784F96;">Los pacientes que ya han experimentado las mejoras en su calidad de vida gracias a los servicios de Merrash. Aquí te dejamos los testimonios que nos han dejado nuestros pacientes</p>
                            <hr class="wp-block-separator is-style-wide" style="color: #784F96; width: 100%;"/>
                        </div>
                        <div class="centrado">
                            @include('components.Testimonios', ['testimonios' => $testimonios])
                        </div>
                          <div style="height:32px; display: flex; justify-content: center;" aria-hidden="true" class="wp-block-spacer desktop-only"></div>
                            <x-LinkServices/>
                        </div>
                        <!-- .entry-footer -->
                    </article>
                    <!-- #post-6 -->
                </main>
                <!-- #main -->
            </section>
            <!-- #primary -->
        </div>
        <x-Footer/>
    </div>
</body>
</html>