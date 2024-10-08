<!DOCTYPE html>
<html lang="en">

{{-- npm run dev command - view bootstrap elements --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Lab Activity 1</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown"
            aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navDropdown">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
    {{-- <br /> --}}
    <div class="container-fluid">
        <div class="row mb-2">
            <?php $i = 1;
            // $now = now();
            ?>
            @foreach ($posts as $post)
                <div class="col-md-4 py-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative h-100">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 pb-2">{{ $post->title }}</h3>
                            <div class="mb-1 text-body-secondary pb-4">{{ $post->created_at->format('M j, Y') }}
                            </div>
                            <p class="card-text mb-auto">{{ $post->post_content }}</p>
                            <br />
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                Continue reading
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        {{-- <div class="col-auto d-none d-md-block">
                            <svg class="bd-placeholder-img" width="200" height="250"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                            </svg>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
