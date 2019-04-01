@extends('layouts.app')

@section('content')
        <div class="breadcrumb-area bg-img ptb-80" style="background-image:url({{ asset('img/banner/breath.jpg')}});">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3>about us</h3>
                    <ul>
                        <li>
                            <a href="{{ route("home") }}">Home</a>
                        </li>
                        <li class="active">about us </li>
                    </ul>
                </div>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor no amet dolor Proin pretium.Duis aute irure dol in reprehenderit in voluptate velit sed do eiusmod tempor incididunt.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis mauris finibus dictum.</p>
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
        <div class="count-area pt-100 pb-70 bg-img" style="background-image:url( {{ asset('img/banner/count.jpg') }});">
		    <div class="container">
		        <div class="row">
                    <div class="col-md-3 col-sm-6">
		                <div class="single-count mb-30 text-center">
                            <div class="count-icon">
                                <i class="fa fa-smile-o"></i>
                            </div>
		                    <h2 class="count">700</h2>
                            <span>Visitor Everyday</span>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		                <div class="single-count mb-30 text-center">
                            <div class="count-icon">
                                <i class="fa fa-cutlery"></i>
                            </div>
		                    <h2 class="count">350</h2>
                            <span>Menu Items</span>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		                <div class="single-count mb-30 text-center">
                            <div class="count-icon">
                                <i class="fa fa-male"></i>
                            </div>
		                    <h2 class="count">400</h2>
                            <span>Expert Chef</span>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		                <div class="single-count mb-30 text-center">
                            <div class="count-icon">
                                <i class="fa fa-heart"></i>
                            </div>
		                    <h2 class="count">990</h2>
                            <span>Test & love</span>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <div class="team-area pt-100 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>Our Lovely team</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team text-center mb-30">
                            <div class="team-img-icon overlay">
                                <img src="{{ asset('img/team/team-1.jpg') }}" alt="">
                                <div class="team-social-icon">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="#">
                                                <i class="ion-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#">
                                                <i class="ion-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#">
                                                <i class="ion-social-instagram-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>Diane Walsh</h3>
                                <span>Special cook</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team text-center mb-30">
                            <div class="team-img-icon overlay">
                                <img src="{{ asset('img/team/team-2.jpg') }}" alt="">
                                <div class="team-social-icon">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="#">
                                                <i class="ion-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#">
                                                <i class="ion-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#">
                                                <i class="ion-social-instagram-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>Doris Perez</h3>
                                <span>Chef cook</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team text-center mb-30">
                            <div class="team-img-icon overlay">
                                <img src="{{ asset('img/team/team-4.jpg') }}" alt="">
                                <div class="team-social-icon">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="#">
                                                <i class="ion-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#">
                                                <i class="ion-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#">
                                                <i class="ion-social-instagram-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>Joan Greene</h3>
                                <span>Junior cook</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-team text-center mb-30">
                            <div class="team-img-icon overlay">
                                <img src="{{ asset('img/team/team-3.jpg') }}" alt="">
                                <div class="team-social-icon">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="#">
                                                <i class="ion-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#">
                                                <i class="ion-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#">
                                                <i class="ion-social-instagram-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>Frank Green</h3>
                                <span>Special cook</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

