<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <a href="{{ route('home') }}" class="nav-item">
                        <img src="{{ asset('images/devmarketer-logo.png') }}" alt="DevMarketer Logo">
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>

                <div class="nav-right">
                    @if(!Auth::guest())
                        <a href="#" class="nav-item is-tab">Login</a>
                        <a href="" class="nav-item is-tab">Join the Community</a>
                    @else
                        <button class="dropdown is-aligned-right nav-item is-tab">
                            Hey Daniel! <span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown-menu" style="overflow: visible;">
                                <li><a href="#"><i class="fa fa-fw fa-user-circle-o m-r-5"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-bell m-r-5"></i>Notifications</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-cog m-r-5"></i>Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href="#"><i class="fa fa-fw fa-sign-out m-r-5"></i>Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
