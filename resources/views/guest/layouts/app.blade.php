<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="_token" content="{{ csrf_token() }}">
</head>

<body style="padding-top: 70px;">
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('app-logo.png') }}" alt="Bootstrap" width="200">
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto justify-content-between w-50">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('why') }}">Why
                                {{ env('APP_NAME') }}?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('product') }}">Shorten URL</a></li>
                                <li><a class="dropdown-item disabled" href="">Tracking (Coming Soon)</a></li>
                                <li><a class="dropdown-item disabled" href="">A/B Testing (Coming Soon)</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('resource') }}">Resources</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-lg-0">
                        @if (auth()->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->email }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                    <li><a class="dropdown-item disabled" href="">Setting (Coming Soon)</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signup') }}">Sign up</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content mx-5">
            @yield('content')
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-3 col-md">
                        <h5>Product</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ route('product') }}">Shorten URL</a></li>
                            <li><a class="text-muted disabled" href="">Tracking (Coming Soon)</a></li>
                            <li><a class="text-muted disabled" href="">A/B Testing (Coming Soon)</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-md">
                        <h5>Pricing</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="">Free</a></li>
                            <li><a class="text-muted" href="">Pro</a></li>
                            <li><a class="text-muted" href="">Enterprise</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="">Document</a></li>
                            <li><a class="text-muted" href="">Support</a></li>
                            <li><a class="text-muted" href="">Enterprise</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-md">
                        <img class="mb-2" src="{{ asset('app-logo.png') }}" alt="" width="100">
                        <small class="d-block mb-3 text-muted">© {{ date('Y') }}</small>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
