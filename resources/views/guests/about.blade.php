<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Lab Activity 1</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        #dashboard {
            color: black;
            font-weight: bolder
        }

        .navbar {
            background-color: #ecf0f1
        }

        /* .nav-link {
            color: #ecf0f1
        } */

        .navbar-brand {
            color: #d53434;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">&emsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15">
                <path fill="currentColor"
                    d="M4.104 3.397L6.57 8.33l-2.645.882L2.597 3.9zm5.173 8.111L7.981 8.915l3.157-1.053l1.165 1.83zm2.907-5.048l-.622.207l-.518-.814l.577-.145z" />
                <path fill="currentColor" fill-rule="evenodd"
                    d="M0 2.5A2.5 2.5 0 0 1 2.5 0h10A2.5 2.5 0 0 1 15 2.5v10a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 0 12.5zm4.804.062a.5.5 0 0 0-.605-.25l-2.357.785a.5.5 0 0 0-.327.596l1.571 6.285a.5.5 0 0 0 .644.354l3.292-1.098l1.602 3.204a.5.5 0 0 0 .705.205l3.928-2.357a.5.5 0 0 0 .165-.697l-1.306-2.053l1.042-.347a.5.5 0 0 0 .242-.775l-1.178-1.571a.5.5 0 0 0-.522-.185l-1.571.393a.5.5 0 0 0-.3.753l.755 1.188L7.53 8.011z"
                    clip-rule="evenodd" />
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/guests/blog">Blog</a>
                </li>

                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('features') }}">Features</a> --}}
                    <a class="nav-link" href="/guests/features">Features</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('versions') }}">Versions</a> --}}
                    <a class="nav-link" href="/guests/versions">Versions</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('history') }}">History</a> --}}
                    <a class="nav-link" href="/guests/history">History</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('about') }}">About</a> --}}
                    <a class="nav-link" href="/guests/about">About</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" id="dashboard" class="nav-link"> Dashboard </a>
                        </li>
                    @endauth
                @endif
                @if (!Auth::check())
                    <li class="nav-item">
                        <a href="{{ route('login') }}" id="dashboard" class="nav-link" {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}>
                            Log in
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" id="dashboard" class="nav-link" {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}>
                                Register
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="col-lg-8 mx-auto p-4 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                    {{-- <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/user.png') }}" />
                    </div> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5.85 17.1q1.275-.975 2.85-1.537T12 15t3.3.563t2.85 1.537q.875-1.025 1.363-2.325T20 12q0-3.325-2.337-5.663T12 4T6.337 6.338T4 12q0 1.475.488 2.775T5.85 17.1M12 13q-1.475 0-2.488-1.012T8.5 9.5t1.013-2.488T12 6t2.488 1.013T15.5 9.5t-1.012 2.488T12 13m0 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                    <span class="fs-4">&emsp;About the Developer</span>
                </a>
            </header>

            <main>
                <h3 class="text-body-emphasis">Allain Daniel S. Espina</h3>
                <p class="fs-5 col-md-8">A fourth-year undergraduate student, taking up his bachelor's degree in
                    Information Technology. He studies at the University of Santo Tomas in Manila.</p>
                <br />
                <a href="#" class="btn btn-primary btn-lg px-4">Learn more</a>

                <br /><br />
                <hr class="featurette-divider">
                <br />

                <div class="row g-5">
                    <div class="col-md-6">
                        <h2 class="text-body-emphasis">Awards and Scholarships</h2>
                        <p>Here are some of the awards and scholarships he received.</p>
                        <ul class="list-unstyled ps-0">
                            <li>
                                <a class="icon-link mb-1" href="#" rel="noopener" target="_blank">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    Consistent Dean's Lister
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#" rel="noopener" target="_blank">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    DOST - SEI Merit Scholar
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#" rel="noopener" target="_blank">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    St. Martin de Porres (External) Scholar
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#" rel="noopener" target="_blank">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    COIL - SHARE University Scholar
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h2 class="text-body-emphasis">Organizations</h2>
                        <p>Here are some of the student organizations he joined in college.</p>
                        <ul class="list-unstyled ps-0">
                            <li>
                                <a class="icon-link mb-1" href="#">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    UST SITE - CICS
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    UST TGS
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    UST CNAG - CICS
                                </a>
                            </li>
                            <li>
                                <a class="icon-link mb-1" href="#">
                                    <svg class="bi" width="16" height="16">
                                        <use xlink:href="#arrow-right-circle"></use>
                                    </svg>
                                    UST ICS COMELEC
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="py-16 text-center text-sm text-black">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
    <br />
</body>

</html>
