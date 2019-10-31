<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Your Service
{{--        {{ config('app.name', 'Your Service') }}--}}
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="position: fixed; z-index: 999; width: 100%;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
{{--                {{ config('app.name', 'Your Service') }}--}}

                <img height="38px" src="data:image/jpeg;base64,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" alt="">
                Your Service
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">{{ __('Services') }}</a>
                    </li>


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        @if(Auth::user()->role === 'provider')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('proposals') }}">{{ __('My Proposals') }} <span
                                        class="badge badge-pill badge-info">{{count(\App\Proposal::where('provider_id', \Illuminate\Support\Facades\Auth::id())->get())}}</span>
                                </a>
                            </li>
                        @endif

                        @if(Auth::user()->role == 'client')

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('dashboard') }}"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Dashboard') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        {{ __('My Services') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('client.proposals') }}">
                                        {{ __('Proposals') }} <span class="badge badge-pill badge-warning">
{{--                                            {{\App\User::whereHas('services', function($q) {--}}
{{--                                                $q::whereHas('proposals', function($q2) {--}}
{{--                                                    $q2::all();--}}
{{--                                                });--}}
{{--                                            })}}--}}
                                        </span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('service.create') }}">
                                        {{ __('Create Service') }}
                                    </a>
                                </div>
                            </li>

                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div style="margin-top: 60px">
            @yield('content')
        </div>
    </main>
</div>


{{-- footer --}}
<!-- Footer -->
<div class="my-5"></div>
<footer class="mt-5 fixed-bottom mt-auto font-small bg-primary text-light" style="font-size: small">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://www.orange.jo/en/pages/coding-academy.aspx" class="text-dark" style="color:orangered"> OrangeAcademy.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
