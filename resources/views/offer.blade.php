<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        <title>Ofertas</title>
        <meta name='robots' content='noindex, nofollow'/>
        <link rel='dns-prefetch' href='//s0.wp.com'/>
        <link rel='dns-prefetch' href='//wordpress.com'/>
        <link rel="alternate" type="application/rss+xml" title="Merrash &raquo; Feed" href="https://merrash-prubeas-production.up.railway.app/"/>
        <link rel="alternate" type="application/rss+xml" title="Merrash &raquo; Comments Feed" href="https://merrash-prubeas-production.up.railway.app/"/>
        <script type="text/javascript">
            /* <![CDATA[ */
            function addLoadEvent(func) {
                var oldonload = window.onload;
                if (typeof window.onload != 'function') {
                    window.onload = func;
                } else { 
                    window.onload = function() {
                        oldonload();
                        func();
                    }
                } 
            }
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/s0.wp.com\/wp-includes\/js\/wp-emoji-release.min.js?m=1710334132i&ver=6.6-alpha-58146"
                }
            };
            /*! This file is auto-generated */
            !function(i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                      , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }
                function u(e, t, n) {
                    switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                    }
                    return !1
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,150) : i.createElement("canvas")
                      , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                      , o = (a.textBaseline = "top",
                    a.font = "600 32px Arial",
                    {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                }
                function t(e) {
                    var t = i.createElement("script");
                    t.src = e,
                    t.defer = !0,
                    i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports",
                s = ["flag", "emoji"],
                n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }
                ),
                new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                                return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                            try {
                                var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                                  , r = new Blob([e],{
                                    type: "text/javascript"
                                })
                                  , a = new Worker(URL.createObjectURL(r),{
                                    name: "wpTestEmojiSupports"
                                });
                                return void (a.onmessage = function(e) {
                                    c(n = e.data),
                                    a.terminate(),
                                    t(n)
                                }
                                )
                            } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }
                ).then(function(e) {
                    for (var t in e)
                        n.supports[t] = e[t],
                        n.supports.everything = n.supports.everything && n.supports[t],
                        "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
                    n.DOMReady = !1,
                    n.readyCallback = function() {
                        n.DOMReady = !0
                    }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(),
                    (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji),
                    t(e.wpemoji)))
                }))
            }((window,
            document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-0-1' href='https://s0.wp.com/wp-includes/css/dashicons.min.css?m=1617198107i&cssminify=yes' type='text/css' media='all'/>
        <link crossorigin='anonymous' rel='stylesheet' id='screen-css-1-1' href='https://s0.wp.com/wp-content/blog-plugins/launch-banner/style.css?m=1706521933i&cssminify=yes' type='text/css' media='screen'/>
        <style id='wp-emoji-styles-inline-css'>
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-4-1' href='https://s0.wp.com/_static/??-eJylzEEOQDAQQNEL0VGNYCHOojWpMko6LXF7jStY/vzkwX2W5vARfYSTknWewaacGoPNJyBcshNKVKCToxk0HWYryekwhQc4PoTCMBfwD4oL7h807oNsZaO6uq/69QUlZjhb&cssminify=yes' type='text/css' media='all'/>
        <style id='wp-block-library-inline-css'>
            .has-text-align-justify {
                text-align: justify;
            }

            .wp-block-cover__image-background.has-parallax {
                background-size: cover;
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-6-1' href='https://s0.wp.com/_static/??-eJzTLy/QzcxLzilNSS3WzyrWz01NyUxMzUnNTc0rQeEU5CRWphbp5qSmJyZX6uVm5uklFxfr6OPTDpRD5sM02efaGpoZmFkYGRuZGmQBAHPvL0Y=&cssminify=yes' type='text/css' media='all'/>
        <style id='jetpack-sharing-buttons-style-inline-css'>
            .jetpack-sharing-buttons__services-list {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 0;
                list-style-type: none;
                margin: 5px;
                padding: 0
            }

            .jetpack-sharing-buttons__services-list.has-small-icon-size {
                font-size: 12px
            }

            .jetpack-sharing-buttons__services-list.has-normal-icon-size {
                font-size: 16px
            }

            .jetpack-sharing-buttons__services-list.has-large-icon-size {
                font-size: 24px
            }

            .jetpack-sharing-buttons__services-list.has-huge-icon-size {
                font-size: 36px
            }

            @media print {
                .jetpack-sharing-buttons__services-list {
                    display: none!important
                }
            }

            .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
                gap: 0;
                padding-inline-start:0}

            ul.jetpack-sharing-buttons__services-list.has-background {
                padding: 1.25em 2.375em
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-8-1' href='https://s0.wp.com/_static/??-eJyVzDEOgCAMQNELiQU1Jg7Gs2AlDYpAaInx9ro5O/7hfbiywhTFRYEcKvnIQPXN1RVSa0h4MOxOssVDBXunKoqK34DlDq5F5gb+LIoVH4k/vpyzGYe+03oyw/4AcmU1KQ==&cssminify=yes' type='text/css' media='all'/>
        <style id='classic-theme-styles-inline-css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-10-1' href='https://s0.wp.com/_static/??-eJx9jUsKwzAMRC9UVYT+VqVnsR2RqkS2sGxy/agNZFWyGfSZN4OLQiq5UW4oHXTuE2fDMApniKHioqkI7Ps5mZ2QMZfGztk+bI//aalU8rtoaF+H0MiBZhK3HWFbdYxayQxchbtAezv4q3vJc3gMt8v17vJZAQ+SSpE=&cssminify=yes' type='text/css' media='all'/>
        <style id='wpcom-admin-bar-inline-css'>
            @media screen {
                html {
                }
            }

            @media screen and ( max-width: 782px ) {
                html {
                }
            }

            @media print {
                #wpadminbar {
                    display: none;
                }
            }

            .admin-bar {
                position: inherit !important;
                top: auto !important;
            }

            .admin-bar .goog-te-banner-frame {
                top: 32px !important
            }

            @media screen and (max-width: 782px) {
                .admin-bar .goog-te-banner-frame {
                    top: 46px !important;
                }
            }

            @media screen and (max-width: 480px) {
                .admin-bar .goog-te-banner-frame {
                    position: absolute;
                }
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-12-1' href='https://s0.wp.com/wp-content/mu-plugins/comment-likes/css/comment-likes.css?m=1407378799i&cssminify=yes' type='text/css' media='all'/>
        <link crossorigin='anonymous' rel='stylesheet' id='print-css-13-1' href='https://s0.wp.com/wp-content/themes/pub/varia/print.css?m=1571655471i&cssminify=yes' type='text/css' media='print'/>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-14-1' href='https://s0.wp.com/_static/??-eJyFj+EKwjAMhF/IGlaU/RKfpauxRtq0pNmGb2+HMAbK/JcL311yMBfjMyuygj4wYYUyDiA0EQfNDFVfEY++1gP8Ricn5IDYf1AzF5/TlyGNpsQxEFcImE3M3im1+K0w9+hI9qyctV11t0RsBidmsnu04BBzaGOARm3kXp1/zTf56x+QXFWU5aM8oQjdWti6WyKu6dL1ne3OJ2v75xv+tYt+&cssminify=yes' type='text/css' media='all'/>
        <style id='jetpack-global-styles-frontend-style-inline-css'>
            :root {
                --font-headings: unset;
                --font-base: unset;
                --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
                --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
            }
            /* Añadir el color de fondo */
            body {
                background-color: #fbfbfb;
                /* Cambia esto al color que desees */
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-16-1' href='https://s0.wp.com/wp-content/themes/h4/global.css?m=1420737423i&cssminify=yes' type='text/css' media='all'/>
        <script type="text/javascript" id="notes-common-lite-js-extra">
            /* <![CDATA[ */
            var wpNotesArgs = {
                "cacheBuster": "d491bd00d6b",
                "iframeUrl": "https:\/\/widgets.wp.com\/notifications\/",
                "iframeAppend": "2",
                "iframeScroll": "no",
                "wide": "1"
            };
            /* ]]> */
        </script>


        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://radial51.wordpress.com/xmlrpc.php?rsd"/>
        <meta name="generator" content="WordPress.com"/>
        <link rel="canonical" href="{{ route('services.available') }}"/>
        <link rel='shortlink' href='https://wp.me/PfMGVu-6'/>
        <!-- Jetpack Open Graph Tags -->
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Services"/>
        <meta property="og:url" content="{{ route('services.available') }}"/>
        <meta property="og:description" content="Ofrecemos una variedad de servicios diseñados para ayudarte a alcanzar los resultados que buscas. ¿No estás seguro de lo que necesitas o de cuánto cuesta? Podemos explicarte qué servicios son los más adecuados para ti y darte más información sobre nuestras tarifas. Ponte en contacto con nosotros a continuación."/>
        <meta property="article:published_time" content="2024-05-18T21:54:45+00:00"/>
        <meta property="article:modified_time" content="2024-05-18T21:54:45+00:00"/>
        <meta property="og:site_name" content="Merrash"/>
        <meta property="og:image" content="https://rivingtondemo.files.wordpress.com/2019/08/dane-deaner-qrfmb-ioqje-unsplash.jpg?w=750"/>
        <meta property="og:image:alt" content=""/>
        <meta property="og:locale" content="en_US"/>
        <meta property="fb:app_id" content="249643311490"/>
        <meta property="article:publisher" content="https://www.facebook.com/WordPresscom"/>
        <meta name="twitter:text:title" content="Services"/>
        <meta name="twitter:image" content="https://rivingtondemo.files.wordpress.com/2019/08/dane-deaner-qrfmb-ioqje-unsplash.jpg?w=144"/>
        <meta name="twitter:card" content="summary"/>
        <!-- End Jetpack Open Graph Tags -->
        <link rel="shortcut icon" type="image/x-icon" href="/img/brand/Spa-1.jpg" sizes="16x16 24x24 32x32 48x48"/>
        <link rel="icon" type="image/x-icon" href="/img/brand/Spa-1.jpg" sizes="16x16 24x24 32x32 48x48"/>
        <link rel="apple-touch-icon" href="/img/brand/Spa-1.jpg"/>        
        <link rel="search" type="application/opensearchdescription+xml" href="https://merrash-prubeas-production.up.railway.app/" title="Merrash"/>
        <link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com"/>
        <meta name="application-name" content="Merrash"/>
        <meta name="msapplication-window" content="width=device-width;height=device-height"/>
        <meta name="msapplication-tooltip" content="Author posts, manage comments, and manage Site Title."/>
        <meta name="description" content="Ofrecemos una variedad de servicios diseñados para ayudarte a alcanzar los resultados que buscas. ¿No estás seguro de lo que necesitas o de cuánto cuesta? Podemos explicarte qué servicios son los más adecuados para ti y darte más información sobre nuestras tarifas. Ponte en contacto con nosotros a continuación. Interior Design A short description of your company and the services you&hellip;"/>
    </head>
    <body class="page-template-default page page-id-6 logged-in admin-bar no-customize-support wp-embed-responsive customizer-styles-applied singular image-filters-enabled hide-homepage-title mobile-nav-side jetpack-reblog-enabled has-launch-banner">

        <script type="text/javascript">
            (function() {
                'use strict';

                var isShowing = false;

                document.querySelectorAll('#wp-admin-bar-jumptotop-button-menu a').forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (window.CSS && window.CSS.supports && window.CSS.supports('scroll-behavior', 'smooth')) {
                            window.scroll({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                        } else {
                            window.scroll(0, 0);
                        }
                    });
                });

                function hideShowButton() {
                    var jumpToTop = document.querySelector('#jumptotop');
                    if (isShowing) {
                        jumpToTop.style.transform = 'translateY( 0 )';
                    } else {
                        jumpToTop.style.transform = 'translateY( -50px )';
                    }
                }

                function hideShowTbJumpToTop() {
                    var total_width = 0;
                    // Calculate total width taken by items minus our button to see if it'll
                    // overlap with other toolbar menus.
                    document.querySelectorAll('#wp-admin-bar-root-default > li').forEach(function(el) {
                        if (el.getAttribute('id') !== 'wp-admin-bar-jumptotop-button-menu') {
                            total_width += el.offsetWidth;
                        }
                    });
                    var menu = document.querySelector('#wp-admin-bar-jumptotop-button-menu');
                    if (!menu) {
                        return;
                    }

                    if (menu.offsetLeft - total_width < 10) {
                        isShowing = false;
                    } else if (window.scrollY >= 350 && !isShowing) {
                        if (menu.offsetLeft - total_width < 10) {
                            return;
                        }
                        isShowing = true;
                    } else if (window.scrollY < 1 && isShowing) {
                        isShowing = false;
                    }
                    hideShowButton();
                }

                // handle on page load if auto scrolling to a position
                hideShowTbJumpToTop();

                // Bind to scroll event
                var jumpToTopTimer = null;
                window.addEventListener('scroll', function() {
                    clearTimeout(jumpToTopTimer);
                    jumpToTopTimer = setTimeout(hideShowTbJumpToTop, 150);
                }, {
                    passive: true
                });
            }
            )();
        </script>
        <div id="page" class="site">

            <x-Navegacion/>
            <!-- #masthead -->
            <div id="content" class="site-content" style="background-color: #fbfbfb;">
                <section id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <article id="post-6" class="post-6 page type-page status-publish hentry entry">
                            <header class="entry-header responsive-max-width">
                                <h1 class="entry-title" style="color: #784F96">Ofertas Disponibles</h1>
                            </header>
                            <div class="entry-content">
                                <p style="text-align:left; color: #784F96;">En Merrash nos gusta pensar en nustros clientes y en su bienestar. Ahora Merrash cuenta con Ofertas disponibles todo el año aqui podras ver todas nuestras Ofertas disponibles, si tienes alguna duda nos puedes contactar.</p>
                                <hr class="wp-block-separator is-style-wide"/>
                            </div>
                            <div class="centrado">
                                @include('components.Ofertas', ['services' => $services])
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
