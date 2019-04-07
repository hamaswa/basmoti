<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote.min.css') }}" rel="stylesheet">
    @stack('style')
    <script src="{{ asset('js/vendor/modernizr.min.js')}}"></script>


</head>
<body>

<header class="header-area transparent-bar header-position">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-5 col-sm-4">
                <div class="logo">
                    <a href="{{ route("home") }}">
                        <img class="logo-normal" alt="" src="{{ asset('img/logo/logo.png') }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-7 col-sm-8">
                <div class="menu-search-bundle">
                    <div class="main-menu">
                        <nav>
                            <ul>

                                <li><a href="{{ route("about.edit",1) }}">Edit About-us</a></li>
                                <li><a href="{{ route("config.edit",1) }}">General Setting</a></li>
                                <li class="top-hover">
                                    <a href="#"> Manage Menu
                                        <i class="ion-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route("menu.index") }}">Menu</a>

                                        </li>
                                        <li>
                                            <a href="{{ route("mcategory.index") }}">Category</a>

                                        </li>
                                    </ul>
                                </li>
                                <li class="top-hover">
                                    <a href="#"> Manage Gallery
                                        <i class="ion-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route("gallery.index") }}">Gallery</a>

                                        </li>
                                        <li>
                                            <a href="{{ route("gcategory.index") }}">Category</a>

                                        </li>
                                    </ul>
                                </li>


                                <li><a href="{{ route("messages.index") }}">Messages</a></li>
                                @if(auth()->id())

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<div class="mt-30">
@yield('content')
</div>
<footer class="footer-area">
    <div class="footer-bottom black-bg-2 pb-25 pt-25">
        <div class="container">
            <div class="copyright text-center">
                <p>Copyright © <a href="#">Basmoti</a>. All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/ajax-mail.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/summernote.min.js') }}"></script>
@stack('scripts')

</body>
</html>
