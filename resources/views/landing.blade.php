<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SITSA GENERIK</title>
        <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

        <style>
            .top-right {
                position: absolute;
                right: 10px;
            }

            .links > a {
                color: #535fd7;
                border-color: #535FD7;
                padding: 0 10px;
                font-size: 17px;
                font-weight: 600;
                letter-spacing: 0.08rem;
                text-decoration: none;
            }
        </style>
    </head>

    <body class="is-boxed has-animations">
        <div class="body-wrap  w-100">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <div class="links">
                                <a href="#">
                                    { SITSA }
                                </a>
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/route-verify') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </header>

            <main id="main">
                <section class="hero">
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-copy">
                                <h1 class="hero-title mt-0">Dimulai dari sini!</h1>
                                <p class="hero-paragraph"> Pendataan <b>Anggota</b> Organisasi atau sejenisnya tak pernah semudah ini, ayo buktikan segera dengan <i>Sistem Informasi Terpadu Sensus Anggota</i> </p>
                                <div class="hero-cta">
                                    <a class="button button-primary" href="#features">Pelajari lebih lanjut</a>
                                </div>
                            </div>
                            <div class="hero-media">
                                <div class="hero-media-illustration">
                                    <img class="hero-media-illustration-image asset-light" src="{{asset('assets/img/landing')}}/hero-media-illustration-light.svg" alt="Hero media illustration">
                                </div>
                                <div class="hero-media-container">
                                    <img class="hero-media-image asset-light" width="460px" src="{{asset('assets/img/landing')}}/screenshot_1.jpg" alt="Hero media">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="features section" id="features">
                    <div class="container">
                        <div class="features-inner section-inner has-bottom-divider">
                            <div class="features-header text-center">
                                <div class="container-sm">
                                    <h2 class="section-title mt-5">{ SITSA }</h2>
                                    <p class="section-paragraph">Lorem ipsum is common placeholder text used to demonstrate the graphic elements of a document or visual presentation.</p>
                                    <div class="features-image">
                                        <img class="features-illustration asset-dark" src="{{asset('assets/img/landing')}}/features-illustration-dark.svg" alt="Feature illustration">
                                        <img class="features-box asset-dark" src="{{asset('assets/img/landing')}}/features-box-dark.svg" alt="Feature box">
                                        <img class="features-illustration asset-dark" src="{{asset('assets/img/landing')}}/features-illustration-top-dark.svg" alt="Feature illustration top">
                                        <img class="features-illustration asset-light" src="{{asset('assets/img/landing')}}/features-illustration-light.svg" alt="Feature illustration">
                                        <img class="features-box asset-light" src="{{asset('assets/img/landing')}}/features-box-light.svg" alt="Feature box">
                                        <img class="features-illustration asset-light" src="{{asset('assets/img/landing')}}/features-illustration-top-light.svg" alt="Feature illustration top">
                                    </div>
                                </div>
                            </div>
                            <div class="features-wrap">
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-01-light.svg" alt="Feature 01">
                                            <img class="asset-dark" src="{{asset('assets/img/landing')}}/feature-01-dark.svg" alt="Feature 01">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Discover</h3>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-02-light.svg" alt="Feature 02">
                                            <img class="asset-dark" src="{{asset('assets/img/landing')}}/feature-02-dark.svg" alt="Feature 02">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Discover</h3>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-03-light.svg" alt="Feature 03">
                                            <img class="asset-dark" src="{{asset('assets/img/landing')}}/feature-03-dark.svg" alt="Feature 03">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Discover</h3>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="site-footer has-top-divider">
                <div class="container">
                    <div class="site-footer-inner">
                        <div class="brand footer-brand">
                            <div class="links">
                                <a href="#" style="color:white;text-decoration:none">
                                    { SITSA }
                                </a>
                            </div>
                        </div>
                        <ul class="footer-links list-reset">
                            <li>
                                <a href="/docs">Dokumentasi</a>
                            </li>
                            <li>
                                <a href="/faqs">Pertanyaan Umum</a>
                            </li>
                            <li>
                                <a href="/helps">Pusat Bantuan</a>
                            </li>
                        </ul>
                        <ul class="footer-social-links list-reset">
                            <li>
                                <a  href="{{app_settings()['site_facebook_link']->value}}" target="_blank">
                                    <span class="screen-reader-text">Facebook</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                                            fill="#FFF"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{app_settings()['site_twitter_link']->value}}" target="_blank">
                                    <span class="screen-reader-text">Twitter</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                                            fill="#FFF"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{app_settings()['site_instagram_link']->value}}" target="_blank">
                                    <span class="screen-reader-text">Instagram</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                            fill="#FFF"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="footer-copyright">&copy; {{ date('Y') }} SITSA, all rights reserved.</div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('assets/js/landing.js') }}"></script>
    </body>
</html>
