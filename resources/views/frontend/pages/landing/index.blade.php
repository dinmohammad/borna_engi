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