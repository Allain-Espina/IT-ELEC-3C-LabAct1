<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Features - Lab Activity 1</title>
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
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Laravel Features</h2>
            <div class="row g-4 py-2 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/module.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Built-in Modules</h3>
                    <p>Built-in packages allow you to add ready-made features to your web application, without the need
                        of having to write code from scratch.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                    <br /><br />
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/automated.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Automated Testing</h3>
                    <p>Laravel offers both unit and feature testing. Unit testing can test small pieces of code, while
                        feature testing can be used to test larger ones.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                    <br /><br />
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/route.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Route Handling</h3>
                    <p>Laravel uses simpler names rather than long path names, making it easier to manage larger
                        applications.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                    <br /><br />
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/security.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Security Features</h3>
                    <p>Laravel offers a wide range of security features, such as user authentication, role
                        authorizations, email verifications, password ashing, and more.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>

                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/template.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Template Engine</h3>
                    <p>Laravel's Blade template engine allows developers to easily create and maintain lightweight
                        templates for their webpages.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>

                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-none bg-gradient fs-2 mb-3">
                        <img class="bi" style="width=1em; height=1em" src="{{ URL('/images/orm.png') }}" />
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Eloquent ORM</h3>
                    <p>Developers can write database queries using PHP syntax rather than SQL code. This makes it faster
                        to manage and query databases.</p>
                    <a href="#" class="icon-link">
                        Learn more
                        <svg class="bi">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>

    <footer class="py-16 text-center text-sm text-black">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
    <br />
</body>

</html>
