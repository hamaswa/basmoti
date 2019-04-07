@extends('layouts.app')

@section('content')
    <div class="slider-video-area height-100vh youtube-bg d-flex align-items-center bg-img"
         style="background-image: url( {{ asset("/uploads") }}/{{ $slider->image_url }});"
         data-property="{videoURL:'{!! $slider->video !!}',opacity:1,showControls:false,autoPlay:true,}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-title text-center">
                        <h1> {{ $slider->description }}</h1>
                        <div class="slider-btn mt-40">
                            <a class="scroll-up" href="#contact-us">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--

    <div class="slider-area">
        <div class="slider-active owl-dot-style owl-carousel">
            <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center"
                 style="background-image:url({{ asset('img/slider/slider-1.jpg')}});">
                <div class="slider-content pt-100">
                    <div class="slider-content-wrap slider-animated-1">
                        <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
                        <h1 class="animated"><span>Hot & spicy</span> food for you</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum.
                            lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
                        <div class="slider-btn mt-20">
                            <a class="animated" href="product-details.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center"
                 style="background-image:url({{ asset('img/slider/slider-2.jpg')}});">
                <div class="slider-content pt-100">
                    <div class="slider-content-wrap slider-animated-1">
                        <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
                        <h1 class="animated"><span>Basmoti</span> knows your taste</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum.
                            lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
                        <div class="slider-btn mt-20">
                            <a class="animated" href="product-details.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!---->

    <div class="about-area ptb-95">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-content pr-30">
                        <h2>{{ $about->title1 }} </h2>
                        @if(auth()->id())
                            <!--div class="col-sm-12 justify-content-xl-end"><a href="#"> Edit </a></div-->
                        @endif
                        <h3> {{ $about->title2 }} </h3>
                        <div class="about-peragraph">
                           {{ $about->short_description }}
                            <div class="default-btn-style mt-35">
                                <a href="{{ route("about.index") }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img alt="" src="{{ asset('uploads') }}/{{ $about->image_url }}">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="gallery-area pt-100 pb-70">
        <div class="container">

            <div class="section-title text-center mb-50">
                <h2>{{ $config->gallerytitle }}</h2>
                <p>
                    {{ $config->gallerydescription }}
                </p>
                </div>
                <div class="gallery-menu-wrap text-center">
                    <div class="gallery-menu portfolio-left-menu mb-50">
                        <button class="active" data-filter="*">ALL</button>
                    @foreach($gcategory as $cat)
                        <button data-filter=".cat{{ $cat->id }}">{{ $cat->name }} </button>
                 @endforeach
                </div>
            </div>
            <div class="row portfolio-style-2 grid">
             @foreach($gallery as $gal)
                <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat{{$gal->category_id}}">
                    <div class="gallery hover-style mb-30">
                        <div class="gallery-img">
                            <img src="{{ asset('/uploads/'.$gal->image_url) }}" alt="" />
                            <div class="gallery-view">
                                <a class="img-popup" href="{{ asset('/uploads/'.$gal->image_url) }}">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach

            </div>
        </div>
    </div>

    <!--div class="popular-product gray-bg pt-100 pb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Our Popular Dishes</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
            </div>
            <div class="product-slider-active owl-carousel">
                <div class="product-style-wrap">
                    <img alt="" src="{{ asset('img/product/pro-1.jpg') }}">
                    <div class="product-content text-center">
                        <h4>

                        </h4>
                        <p></p>
                        <span></span>
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

    </div-->


    <div class="product-menu-area pt-100 pb-70 gray-bg" id="menu">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>{{ $config->menutitle }}</h2>

                <p>
                    {{ $config->menudescription }}
                </p>
            </div>

            <div class="menu-tab-wrap mb-50">

                <div class="menu-tab-list nav text-center">
                    <a class="active" href="#tab1" data-toggle="tab">
                        All item
                    </a>
                    @foreach($mcategory as $cat)
                        <a href="#tab{{ $cat->id }}" data-toggle="tab">
                            {{ $cat->name }}
                        </a>
                    @endforeach


                </div>

            </div>
            <div class="tab-content jump">
                @foreach($mcategory as $cat)
                    <div id="tab{{ $cat->id }}" class="tab-pane active">
                        @foreach($cat['menu'] as $menu)
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-menu-product mb-30">
                                        <div class="menu-product-img">
                                            <img alt="" src="{{ asset('/uploads/'.$menu->image_url) }}">
                                        </div>
                                        <div class="menu-product-content">
                                            <div class="menu-title-price">
                                                <div class="menu-title">
                                                    <h4>
                                                        {{ $menu->title }}
                                                    </h4>
                                                </div>
                                                <div class="menu-price">
                                                    <span>$100</span>
                                                </div>
                                            </div>
                                            <p>{{ $menu->title }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="contact-area pt-100" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">Leave Us a Message</h4>
                        <div class="contact-message">
                            <form id="contact-form" action="{{ route('contact-us.store') }}" method="post">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="fullname" placeholder="Full Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email Address" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit btn-style" id="contact-submit" type="submit">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-area">
                        <h4 class="contact-title mb-18">Contact Us</h4>
                        <p>Lorem ipsum dolor sit amet, conse ncteturll adipisicing elit, sed do eiusmod </p>
                        <div class="contact-info-wrap">
                            <div class="single-contact-info mb-40">
                                <div class="contact-info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h4>Location :</h4>
                                    <p>77, seventh avenue, Road USA.</p>
                                </div>
                            </div>
                            <div class="single-contact-info mb-35">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h4>phone :</h4>
                                    <p>+00 111 222 333 44</p>
                                    <p>+00 111 222 333 44</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h4>mail :</h4>
                                    <p><a href="#">yourmail@gmail.com</a></p>
                                    <p><a href="#">info@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-area pt-100">
                <div id="googleMap"></div>
            </div>
        </div>
    </div>




@endsection
