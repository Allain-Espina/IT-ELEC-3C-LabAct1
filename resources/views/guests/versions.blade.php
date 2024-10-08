<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Versions - Lab Activity 1</title>
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
            <h2 class="pb-2 border-bottom">Laravel Versions</h2>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 1, 2, and 3</h1>
                <p class="lead">The first beta of Laravel 1 was released in June 2011, and it was written completely
                    from
                    scratch. It featured a custom ORM (Eloquent); closure-based routing (inspired by Ruby Sinatra); a
                    module
                    system for extension; and helpers for forms, validation, authentication, and more. Early Laravel
                    development moved quickly, and Laravel 2 and 3 were released in November 2011 and February 2012,
                    respectively. They introduced controllers, unit testing, a command-line tool, an inversion of
                    control
                    (IoC) container, Eloquent relationships, and migrations.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 4</h1>
                <p class="lead">With Laravel 4, Taylor rewrote the entire framework from the ground up.
                    By this point Composer, PHP’s now-ubiquitous package manager, was
                    showing signs of becoming an industry standard, and Taylor saw the
                    value of rewriting the framework as a collection of components,
                    distributed and bundled together by Composer.
                    Taylor developed a set of components under the code name Illuminate
                    and, in May 2013, released Laravel 4 with an entirely new structure.
                    Laravel 4 also introduced queues, a mail component, facades, and
                    database seeding.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 5</h1>
                <p class="lead">Laravel 5 was released in February 2015 and its featured a revamped directory
                    structure,
                    the removal of the form and HTML helpers, the introduction of the contract interfaces, a spate of
                    new
                    views, Socialite for social media authentication, Elixir for asset compilation, Scheduler to
                    simplify
                    cron, dotenv for simplified environment management, form requests, and a brand-new REPL (read–
                    evaluate–print loop). Since then, it’s grown in features and maturity, but there have been no major
                    changes like in previous versions.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 6</h1>
                <p class="lead">In September 2019, Laravel 6 was introduced with two primary changes:
                    first, removal of the string and array global helpers Laravel offers (in
                    favor of facades); and second, moving to SemVer (semantic versioning)
                    for version numbering. The practical effect of this change means that, for
                    all versions of Laravel after 5, both major (6, 7, etc.) and minor (6.1, 6.2,
                    etc.) versions are released much more frequently.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 7</h1>
                <p class="lead">Laravel 7 was released on March 3, 2020, with new features like Laravel Sanctum,
                    Custom
                    Eloquent Casts, Blade Component Tags, Fluent String Operations and Route Model Binding Improvements.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 8</h1>
                <p class="lead">Laravel 8 was released on September 8, 2020, with new features like Laravel Jetstream,
                    model factory classes, migration squashing, Tailwind CSS for pagination views and other usability
                    improvements.</p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Laravel 11</h1>
                <p class="lead">Laravel 11 was released on March 12, 2024. It was announced on the Laravel blog and
                    other
                    social media, it was also discussed in detail at Laracon EU in Amsterdam on 5–6 February. Along with
                    Laravel 11, a first-party websocket server called Laravel Reverb was released.
                </p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View Documentation
                    »</a>
            </div>
        </div>

        <footer class="py-16 text-center text-sm text-black">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
        <br />
</body>

</html>
