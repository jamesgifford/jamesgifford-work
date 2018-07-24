<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name'))</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light mb-5 p-5">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" />
                    <span>@yield('title', config('app.name'))</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/work">Work</a>
                        </li>
                        <li class="nav-item d-none">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('header')

            <main role="main">

                @yield('content')

                <footer class="mt-5 pt-5 bg-dark">
                    <div class="container">
                        <div class="row text-center pb-5">
                            <div class="col-md-12">
                                <h1><a href="/contact" class="footer-contact btn btn-lg btn-primary mb-5">Contact Me</a></h1>
                            </div>
                        </div>
                        <div class="row text-center pb-5">
                            <div class="col-md-12">
                                <p>Designed by James Gifford in Oregon with Laravel</p>
                            </div>
                        </div>
                    </div>
                </footer>

            </main>

            <footer>
            </footer>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
