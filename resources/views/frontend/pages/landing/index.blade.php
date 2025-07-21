@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Banner Section START -->
    <section class="hero-wrapper position-relative text-white">
        <div class="swiper mySwiper" id="banner_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-slider-single">
                        <img src="{{ asset('assets/images/banner/banner_one.png') }}" alt="">
                    </div>
                    <div class="hero-mid-content translate-middle-y position-absolute top-50 text-center w-100">
                        <div class="hero-mc-header">
                            <h1 class="display-4 fw-bold">Find Your Dream Home</h1>
                            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>

                    <div class="hero-filter-content position-absolute bottom-0 pb-5 w-100 text-center">
                        <div class="bg-white p-3 p-md-4 rounded shadow d-flex flex-column flex-md-row align-items-center w-100 mx-auto gap-4" style="max-width: 1096px;">
        
                            <!-- Residential Dropdown -->
                            <div class="hero-single-input flex-fill">
                                <label class="text-dark text-start fw-bold mb-1 d-block">Residential</label>
                                <select class="form-select" name="residental_type" id="residental_type">
                                    <option selected>Property type</option>
                                    <option>Apartment</option>
                                    <option>Villa</option>
                                </select>
                            </div>

                            <!-- Commercial Dropdown -->
                            <div class="hero-single-input flex-fill">
                                <label class="text-dark text-start fw-bold mb-1 d-block">Commercial</label>
                                <select class="form-select" name="commercial_type" id="commercial_type">
                                    <option selected>Property type</option>
                                    <option>Office</option>
                                    <option>Shop</option>
                                </select>
                            </div>

                            <!-- Landowner Dropdown -->
                            <div class="hero-single-input flex-fill">
                                <label class="text-dark fw-bold mb-1 d-block">Landowner</label>
                                <select class="form-select"  name="landowner_type" id="landowner_type">
                                    <option selected>Property type</option>
                                    <option>Land</option>
                                    <option>Plot</option>
                                </select>
                            </div>

                            <!-- Search Button -->
                            <div class="hero-button-single ">
                                <button class="theme-primary-solid-button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Banne .END -->


</div>
@endsection