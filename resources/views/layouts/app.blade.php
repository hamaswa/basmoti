<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $config->title }}</title>
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
                        @if($config->site_logo == "Logo Here")
                            <img class="logo-normal" alt="" src="{{ asset('img/logo/logo.png') }}">
                        @else
                            <img class="logo-normal" alt="" src="{{ asset('uploads/'.$config->site_logo) }}">
                        @endif

                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-7 col-sm-8">
                <div class="menu-search-bundle">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="top-hover"><a href="{{ route("home") }}">home <i
                                                class="ion-chevron-down"></i></a>

                                </li>
                                <li><a href="{{ route("home") }}#about">about</a></li>
                                <li class="mega-menu-position top-hover">
                                    <a href="{{ route("home") }}#menu">menu <i class="ion-chevron-down"></i></a>
                                </li>
                                <li><a href="#contact-us">contact us</a></li>
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
            <div class="mobile-menu-area d-md-block d-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">HOME</a>
                                <ul>
                                    <li><a href="../index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us </a></li>
                                    <li><a href="menu.html">menu style 1</a></li>
                                    <li><a href="menu-2.html">menu style 2</a></li>
                                    <li><a href="gallery.html">gallery style 1</a></li>
                                    <li><a href="gallery-2.html">gallery style 2</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                </ul>
                            </li>
                            <li><a href="#">menu</a>
                                <ul>
                                    <li><a href="#">menu list 01</a>
                                        <ul>
                                            <li><a href="menu.html">salad</a></li>
                                            <li><a href="menu.html">sandwich</a></li>
                                            <li><a href="menu.html">bread</a></li>
                                            <li><a href="menu.html">steak</a></li>
                                            <li><a href="menu.html">tuna steak</a></li>
                                            <li><a href="menu.html">spaghetti </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">menu list 02</a>
                                        <ul>
                                            <li><a href="menu.html">rice</a></li>
                                            <li><a href="menu.html">pizza</a></li>
                                            <li><a href="menu.html">hamburger</a></li>
                                            <li><a href="menu.html">eggs</a></li>
                                            <li><a href="menu.html">sauces</a></li>
                                            <li><a href="menu.html">apple juice</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">menu list 03</a>
                                        <ul>
                                            <li><a href="menu.html">milk</a></li>
                                            <li><a href="menu.html">grape juice</a></li>
                                            <li><a href="menu.html">cookie</a></li>
                                            <li><a href="menu.html">candy</a></li>
                                            <li><a href="menu.html">cake</a></li>
                                            <li><a href="menu.html">cupcake</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">menu list 04</a>
                                        <ul>
                                            <li><a href="menu.html">pie</a></li>
                                            <li><a href="menu.html">strawberry</a></li>
                                            <li><a href="menu.html">sandwich</a></li>
                                            <li><a href="menu.html">bread</a></li>
                                            <li><a href="menu.html">steak</a></li>
                                            <li><a href="menu.html">hamburger</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">blog</a>
                                <ul>
                                    <li><a href="blog-no-sidebar.html">Blog No sidebar</a></li>
                                    <li><a href="blog.html">Blog sidebar</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer-area">
    <div class="footer-area-top black-bg pt-95 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-30">
                            <h4>About Us</h4>
                        </div>
                        <div class="footer-about">
                            <p>{{ $about->short_description }}</p>
                            <div class="footer-map">
                                <a href="#map"><i class="ion-ios-location-outline"></i> View on map</a>
                            </div>
                        </div>
                        <div class="social-icon">
                            <ul>
                                @if(isset($config->facebook))
                                    <li><a class="facebook" href="{{$config->facebook}}"><i
                                                    class="ion-social-facebook"></i></a></li>
                                @endif
                                @if(isset($config->facebook))

                                    <li><a class="twitter" href="{{$config->twitter}}"><i
                                                    class="ion-social-twitter"></i></a></li>
                                @endif
                                @if(isset($config->facebook))
                                    <li><a class="instagram" href="{{$config->instagram}}"><i
                                                    class="ion-social-instagram-outline"></i></a></li>
                                @endif
                                @if(isset($config->facebook))
                                    <li><a class="youtube" href="{{$config->youtube}}"><i
                                                    class="ion-social-youtube-outline"></i></a></li>
                                @endif
                                @if(isset($config->facebook))
                                    <li><a class="pinterest" href="{{$config->youtube}}"><i
                                                    class="ion-social-pinterest-outline"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-30">
                            <h4>contact Us</h4>
                        </div>
                        <div class="footer-cont-info">
                            <div class="single-footer-cont-info">
                                <div class="cont-info-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont-info-content">
                                    <p>{{$config->location}}</p>
                                </div>
                            </div>
                            <div class="single-footer-cont-info">
                                <div class="cont-info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont-info-content">
                                    <p>{{ $config->phone }}</p>
                                </div>
                            </div>
                            <div class="single-footer-cont-info">
                                <div class="cont-info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="cont-info-content">
                                    <a href="#">{{$config->email}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-30">
                            <h4>Opening Time</h4>
                        </div>
                        <div class="open-time pr-30">
                            <ul>
                                <li>
                                    Saturday
                                    <span>{{ $config->saturday }}</span>
                                </li>
                                <li>
                                    Sunday
                                    <span>{{$config->sunday}}</span>
                                </li>
                                <li>
                                    Monday
                                    <span>{{ $config->monday }}</span>
                                </li>
                                <li>
                                    Tuesday
                                    <span>{{ $config->tuesday }}</span>
                                </li>
                                <li>
                                    Wednesday
                                    <span>{{ $config->wednesday }}</span>
                                </li>
                                <li>
                                    Thursday
                                    <span>{{ $config->thursday }}</span>
                                </li>
                                <li>
                                    Friday
                                    <span>{{$config->friday}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg-2 pb-25 pt-25">
        <div class="container">
            <div class="copyright text-center">
                <p>{{$config->copyright}}</p>
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
