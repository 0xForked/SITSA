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
                padding: 15px 10px;
                margin-top:10px;
                font-size: 17px;
                font-weight: 500;
                letter-spacing: 0.08rem;
                text-decoration: none;
            }

            .links > a:hover {
                color: #757dd1;
            }

            .links .menu:hover {
                text-decoration: underline !important;
            }

            .links .button {
                text-transform: none !important;
                border-radius: 35px;
                font-size: 15px;
            }
            .links .button:hover {
                background: #757dd1 !important;
            }

            .links .brand {
                font-weight: 600;
            }

            .hero-figure-box {
                position: absolute;
                top: 0;
                will-change: transform
            }

            .hero-figure-box-01,
            .hero-figure-box-02,
            .hero-figure-box-03,
            .hero-figure-box-05,
            .hero-figure-box-06 {
                overflow: hidden
            }

            .hero-figure-box-01::before,
            .hero-figure-box-02::before,
            .hero-figure-box-03::before,
            .hero-figure-box-05::before,
            .hero-figure-box-06::before {
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                -webkit-transform-origin: 100% 100%;
                transform-origin: 100% 100%
            }

            .hero-figure-box-01 {
                left: 103.2%;
                top: 41.9%;
                width: 28.03%;
                height: 37.37%;
                background: linear-gradient(to left top, #00BFFB, rgba(0, 191, 251, 0));
                -webkit-transform: rotateZ(45deg);
                transform: rotateZ(45deg)
            }

            .hero-figure-box-01::before {
                background: linear-gradient(to left, #15181D 0%, rgba(21, 24, 29, 0) 60%);
                -webkit-transform: rotateZ(45deg) scale(1.5);
                transform: rotateZ(45deg) scale(1.5)
            }

            .hero-figure-box-02 {
                left: 61.3%;
                top: 64.1%;
                width: 37.87%;
                height: 50.50%;
                background: linear-gradient(to left top, #0270D7, rgba(2, 112, 215, 0));
                -webkit-transform: rotateZ(-45deg);
                transform: rotateZ(-45deg)
            }

            .hero-figure-box-02::before {
                background: linear-gradient(to top, #15181D 0%, rgba(21, 24, 29, 0) 60%);
                -webkit-transform: rotateZ(-45deg) scale(1.5);
                transform: rotateZ(-45deg) scale(1.5)
            }

            .hero-figure-box-03 {
                left: 54.9%;
                top: -8%;
                width: 45.45%;
                height: 60.60%;
                background: linear-gradient(to left top, #0270D7, rgba(2, 112, 215, 0));
                -webkit-transform: rotateZ(-135deg);
                transform: rotateZ(-135deg)
            }

            .hero-figure-box-03::before {
                background: linear-gradient(to top, rgba(255, 255, 255, 0.24) 0%, rgba(255, 255, 255, 0) 60%);
                -webkit-transform: rotateZ(-45deg) scale(1.5);
                transform: rotateZ(-45deg) scale(1.5)
            }

            .hero-figure-box-04 {
                background-color: #242830;
                box-shadow: -20px 32px 64px rgba(0, 0, 0, 0.25)
            }

            .hero-figure-box-04 {
                left: 65.5%;
                top: 6.3%;
                width: 30.3%;
                height: 40.4%;
                -webkit-transform: rotateZ(20deg);
                transform: rotateZ(20deg)
            }

            .hero-figure-box-05 {
                left: 27.1%;
                top: 81.6%;
                width: 19.51%;
                height: 26.01%;
                background: #0270D7;
                -webkit-transform: rotateZ(-22deg);
                transform: rotateZ(-22deg)
            }

            .hero-figure-box-05::before {
                background: linear-gradient(to left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.48) 100%);
                -webkit-transform: rotateZ(45deg) scale(1.5);
                transform: rotateZ(45deg) scale(1.5)
            }

            .hero-figure-box-06 {
                left: 42.6%;
                top: -17.9%;
                width: 6.63%;
                height: 8.83%;
                background: #00BFFB;
                -webkit-transform: rotateZ(-52deg);
                transform: rotateZ(-52deg)
            }

            .hero-figure-box-06::before {
                background: linear-gradient(to left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.64) 100%);
                -webkit-transform: rotateZ(45deg) scale(1.5);
                transform: rotateZ(45deg) scale(1.5)
            }

            .hero-figure-box-07 {
                left: -3.8%;
                top: 4.3%;
                width: 3.03%;
                height: 4.04%;
                background: rgba(0, 191, 251, 0.32);
                -webkit-transform: rotateZ(-50deg);
                transform: rotateZ(-50deg)
            }

            @media (max-width: 640px) {
                .hero-cta {
                    max-width: 280px;
                    margin-left: auto;
                    margin-right: auto
                }
                .hero-cta .button {
                    display: flex
                }
                .hero-cta .button+.button {
                    margin-top: 16px
                }
                .hero-figure::after,
                .hero-figure-box-03,
                .hero-figure-box-06 {
                    display: none
                }
            }
            .articles {margin-top: 300px;}
            .articles-wrap{display:flex;flex-wrap:wrap;justify-content:center;margin-right:-12px;margin-left:-12px;margin-top:100px;}.articles-wrap:first-child{margin-top:-12px}.articles-wrap:last-child{margin-bottom:-12px}
            .article{padding:12px;width:276px;max-width:276px;flex-grow:1}
            .article-inner{height:100%;background:#fff;padding:40px 24px;box-shadow:0 16px 48px #E2E8ED}@supports (-ms-ime-align: auto){.article-inner{box-shadow:0 16px 48px rgba(31,43,53,0.12)}}
            .article-icon{display:flex;justify-content:center}.article-title{margin-top:12px;margin-bottom:8px}
            .articles-wrap a {text-decoration: none; color:#949faf}

        </style>
    </head>

    <body class="is-boxed has-animations">
        <div class="body-wrap  w-100">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <div class="links ">
                                <a class="brand" href="{{url('/')}}">
                                    { SITSA }
                                </a>
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <div class="top-right links">
                                <a class="menu" href="{{ url('/articles') }}">Artikel</a>
                                <a class="menu" href="{{ url('/contacts') }}">Kontak</a>

                                @auth
                                    <a class="menu" href="{{ url('/route-verify') }}">Dashboard</a>
                                    <a
                                        class="button button-primary"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();
                                        logoutProcess();"
                                    >
                                        Logout
                                    </a>
                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        style="display: none;"
                                    >
                                        @csrf
                                    </form>

                                @else
                                    <a class="menu" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a class="button button-primary" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </header>

            <main id="main">
                <section class="hero" style="margin-top:50px">
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
                                <div class="hero-figure anime-element">
                                    <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                                    <div class="hero-figure-box hero-figure-box-03" data-rotation="-135deg"></div>
                                    <div class="hero-figure-box hero-figure-box-04"></div>
                                    <div class="hero-figure-box hero-figure-box-05" data-rotation="-22deg"></div>
                                    <div class="hero-figure-box hero-figure-box-06" data-rotation="-52deg"></div>
                                    <div class="hero-figure-box hero-figure-box-07" data-rotation="-50deg"></div>
                                </div>
                                <div class="hero-media-container">
                                    <img class="hero-media-image asset-light" width="480px" src="{{asset('assets/img/landing')}}/screenshot_dashboard.jpg" alt="Hero media">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="articles" id="articles">
                    <div class="container">
                        <div class="articles-header text-center">
                            <div class="container-sm">
                                <h2 class="section-title mt-5">Artikel Terbaru</h2>
                                <p class="section-paragraph">Pantau Kabar, berita atau info terbaru dari {{app_settings()['site_title']->value}}.</p>
                            </div>
                        </div>
                        <div class="articles-wrap">
                            @for ($i = 0; $i < 8; $i++)
                                <a href="{{ route('articles.detail', 'article-one-slug') }}">
                                    <div class="article">
                                        <div class="article-inner">
                                            <div class="article-icon">
                                                <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
                                                            <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                            <stop stop-color="#007DFF" offset="100%"/>
                                                        </linearGradient>
                                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-2-b">
                                                            <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                            <stop stop-color="#FF4F7A" offset="100%"/>
                                                        </linearGradient>
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M0 0h32v7c0 13.807-11.193 25-25 25H0V0z" fill="url(#feature-2-a)"/>
                                                        <path d="M48 16v7c0 13.807-11.193 25-25 25h-7c0-17.673 14.327-32 32-32z" fill="url(#feature-2-b)" transform="matrix(1 0 0 -1 0 64)"/>
                                                    </g>
                                                </svg>

                                            </div>
                                            <h4 class="article-title h3-mobile">Lorem ipsum dolor sit amet consectetur.</h4>
                                            <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design . . . . .</p>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                        <div class="articles-footer text-right" style="margin-top:50px">
                            <div class="links">
                                <a class="menu" href="{{route('articles')}}">Muat lebih banyak . . . </a>
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
                                        <img class="features-illustration asset-light" src="{{asset('assets/img/landing')}}/features-illustration-light.svg" alt="Feature illustration">
                                        <img class="features-box asset-light" src="{{asset('assets/img/landing')}}/screenshot_dashboard.jpg" width="450" alt="Feature box">
                                        {{-- features-box-light.svg --}}
                                        <img class="features-illustration asset-light" src="{{asset('assets/img/landing')}}/features-illustration-top-light.svg" alt="Feature illustration top">
                                    </div>
                                </div>
                            </div>
                            <div class="features-wrap">
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-01-light.svg" alt="Feature 01">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Analisa</h3>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-02-light.svg" alt="Feature 02">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Perekaman</h3>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua dui.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature is-revealing">
                                    <div class="feature-inner">
                                        <div class="feature-icon">
                                            <img class="asset-light" src="{{asset('assets/img/landing')}}/feature-03-light.svg" alt="Feature 03">
                                        </div>
                                        <div class="feature-content">
                                            <h3 class="feature-title mt-0">Pelaporan</h3>
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
                                <a class="brand" href="{{url('/')}}" style="color:white;text-decoration:none">
                                    { SITSA }
                                </a>
                            </div>
                        </div>
                        <ul class="footer-links list-reset">
                            <li>
                                <a href="{{route('docs', '1.x')}}">Dokumentasi</a>
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
                        <div class="footer-copyright">&copy; {{ date('Y') }} {{app_settings()['site_title']->value}}, all rights reserved.</div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ asset('assets/js/landing.js') }}"></script>
    </body>
</html>
