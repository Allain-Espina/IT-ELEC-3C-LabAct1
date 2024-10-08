<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History - Lab Activity 1</title>
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

    <main class="flex-shrink-0">
        <div class="container">
            <br />
            <h1 class="pb-2 border-bottom">Laravel's History</h1>
            <br />
            <p class="lead">Laravel is considered by many to be the default framework for creating PHP-based websites
                and web applications at scale. It has become one of the most popular (if not the most popular) PHP web
                application frameworks due to its elegant and functional syntax, extensive features, and
                developer-friendly approach.</p>
            <br />
            <p>Taylor Otwell released Laravel in 2011 as a personal project. His goal was to improve on CodeIgniter —
                which, at the time, was a well known and widely used framework. He aimed to address some of the
                limitations he encountered in CodeIgniter and to incorporate modern PHP features and best practices.
                <br /><br />
                After several iterations, Taylor open-sourced Laravel under the MIT License, making it freely available
                to the developer community. The Laravel framework quickly gained traction and garnered a dedicated
                following due to its syntax, features, and ease of use.
                <br /><br />
                Laravel’s popularity continued to rise with each subsequent release. This open-source PHP framework
                adopted a regular release cycle, introducing new features, enhancements, and bug fixes to keep up with
                the evolving needs of the web development community as well as the several improvements the PHP language
                had during that period.
                <br /><br />
                The Laravel community also played a significant role in the Laravel framework’s growth and success. A
                vibrant community of developers actively began to to contribute to Laravel’s development, documentation,
                and ecosystem. This collaborative effort has continued to solidify Laravel’s position as the leading
                open-source PHP framework to this day.
            </p>
            <br />
            <hr class="featurette-divider">
        </div>
    </main>

    <footer class="py-16 text-center text-sm text-black">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
    <br />
</body>

</html>
