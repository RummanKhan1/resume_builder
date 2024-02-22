<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title','Resume Maker')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div id="app">

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Resume.maker
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link #" href="#">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "  href="#">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link #" href="#">Cetrifiction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link #" href="#">Career Object</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->

                    </div>
                </div>
            </nav>
            <div class="container mt-2">
                @if(session('update'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('update') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('delete') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
