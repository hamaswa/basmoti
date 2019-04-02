@extends('layouts.app')

@section('content')
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center"
                     style="background-image:url({{ asset('img/slider/slider-1.jpg')}});">
                    <div class="slider-content pt-100">
                        <div class="slider-content-wrap slider-animated-1">
                            <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
                            <h1 class="animated"><span>Hot & spicy</span> food for you</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum. lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
                            <div class="slider-btn mt-20">
                                <a class="animated" href="product-details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--

                <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center"
                     style="background-image:url({{ asset('img/slider/slider-2.jpg')}});">
                    <div class="slider-content pt-100">
                        <div class="slider-content-wrap slider-animated-1">
                            <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
                            <h1 class="animated"><span>Basmoti</span> knows your taste</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum. lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
                            <div class="slider-btn mt-20">
                                <a class="animated" href="product-details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

        <div class="about-area ptb-95">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content pr-30">
                            <h2>About Basmoti Restaurant </h2>
                            <h3> Basmoti ensures healthy environment. Make a short trip. </h3>
                            <div class="about-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum.</p>
                                <div class="default-btn-style mt-35">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img alt="" src="{{ asset('img/banner/about.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="popular-product gray-bg pt-100 pb-100">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>Our Popular Dishes</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <div class="product-slider-active owl-carousel">
                    <div class="product-style-wrap">
                        <img alt="" src="{{ asset('img/product/pro-1.jpg') }}">
                        <div class="product-content text-center">
                            <h4>
                                Oldtimer with Cheese
                            </h4>
                            <p>Chicken meat which is breaded or battered, then deep.</p>
                            <span>$100.00</span>
                        </div>
                    </div>
                    <div class="product-style-wrap">
                        <img alt="" src="{{ asset('img/product/pro-2.jpg') }}">
                        <div class="product-content text-center">
                            <h4>
                                Black Bean Fajitas
                            </h4>
                            <p>Chicken meat which is breaded or battered, then deep.</p>
                            <span>$200.00</span>
                        </div>
                    </div>
                    <div class="product-style-wrap">
                        <img alt="" src="{{ asset('img/product/pro-3.jpg') }}">
                        <div class="product-content text-center">
                            <h4>
                                Chicken Nugget
                            </h4>
                            <p>Chicken meat which is breaded or battered, then deep.</p>
                            <span>$300.00</span>
                        </div>
                    </div>
                    <div class="product-style-wrap">
                        <img alt="" src="{{ asset('img/product/pro-4.jpg') }}">
                        <div class="product-content text-center">
                            <h4>
                                Match Fajita Trio
                            </h4>
                            <p>Chicken meat which is breaded or battered, then deep.</p>
                            <span>$150.00</span>
                        </div>
                    </div>
                    <div class="product-style-wrap">
                        <img alt="" src="{{ asset('img/product/pro-1.jpg') }}">
                        <div class="product-content text-center">
                            <h4>
                                Match Fajita Trio
                            </h4>
                            <p>Chicken meat which is breaded or battered, then deep-fried or baked.</p>
                            <span>$50.00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="product-menu-area pt-100 pb-70 gray-bg" id="menu">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>Our Food Menu</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <!--
                <div class="menu-tab-wrap mb-50">

                    <div class="menu-tab-list nav text-center">
                        <a class="active" href="#tab1" data-toggle="tab">
                            All item
                        </a>
                        <a href="#tab2" data-toggle="tab">
                            breakfast
                        </a>
                        <a href="#tab3" data-toggle="tab">
                            lunch
                        </a>
                        <a href="#tab4" data-toggle="tab">
                            dinner
                        </a>
                        <a href="#tab5" data-toggle="tab">
                            party
                        </a>
                        <a href="#tab6" data-toggle="tab">
                            coffee
                        </a>
                    </div>

                </div>  -->
                <div class="tab-content jump">
                    <div id="tab1" class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-1.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Lamb Salad with Fregola.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$100</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-2.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Ultimate Bacon Burger.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$150</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-3.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Ultimate Bacon Burger.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$200</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-4.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Black Bean & Veggie Fajitas.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$250</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('') }}img/product/menu-5.jpg">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Oldtimer with Cheese.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$170</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('') }}img/product/menu-6.jpg">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Crispy Fiery Pepper Crispers.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$120</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-1.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Lamb Salad with Fregola.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$180</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-menu-product mb-30">
                                    <div class="menu-product-img">
                                        <img alt="" src="{{ asset('img/product/menu-2.jpg') }}">
                                    </div>
                                    <div class="menu-product-content">
                                        <div class="menu-title-price">
                                            <div class="menu-title">
                                                <h4>
                                                    Ultimate Bacon Burger.
                                                </h4>
                                            </div>
                                            <div class="menu-price">
                                                <span>$170</span>
                                            </div>
                                        </div>
                                        <p>Categories: Subway, Masala, Indian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





@endsection
