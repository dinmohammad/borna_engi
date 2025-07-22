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
                </div>
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
                </div>
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
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="hero-filter-content position-absolute bottom-0 pb-5 w-100 text-center z-1">
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
    </section>
    <!-- Banner .END -->

    <!-- Highlight Product Section START -->
    <section class="highlight-product-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="section-heading">
                        <h2>Highlighted Projects</h2>
                        <p class="m-0">Turpis facilisis tempor pulvinar in lobortis ornare magna.</p>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="section-content section-content-top-margin">
                        <div class="swiper product_slider overflow-visible">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content w-75">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content w-75">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content w-75">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/product_1.png') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content w-75">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Highlight Product .END -->

    <!-- Success Project Section START -->
    <section class="success-project-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container py-5">
            <div class="row">
                <!-- Counters -->
                <div class="col-md-6">
                   <div class="project-count-wrap">
                        <div class="row">
                            <div class="col-6">
                                <div class="counter-box">
                                    <div class="counter" data-target="64">0</div>
                                    <div class="description">Districts Completed</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-box">
                                    <div class="counter" data-target="1100">0</div>
                                    <div class="description">Project Complete</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-box mt-5">
                                    <div class="counter" data-target="11">0</div>
                                    <div class="description">Finished Projects</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-box mt-5">
                                    <div class="counter" data-target="1205">0</div>
                                    <div class="description">Happy Clients</div>
                                </div>
                            </div>

                        </div>
                   </div>
                </div>

                <!-- Text and CTA -->
                <div class="col-md-6 ">
                    <div class="section-heading">
                        <h2>We use Real Estate to show our appreciation of the world.</h2>
                        <p class="m-0">We provide equity and debt capital globally to back projects that make an impact.</p>
                        <button class="theme-primary-solid-button mt-4">Know More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Project .END -->

    <!-- Why Choose Section START -->
    <section class="why-choose-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container">
            <div class="row align-items-center">
                <!-- left -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="why-choose-image">
                        <div class="swiper why_choose_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-why-choose-image">
                                    <img src="{{ asset('assets/images/start_product/star_1.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                                </div>
                                <div class="swiper-slide single-why-choose-image">
                                    <img src="{{ asset('assets/images/start_product/star_1.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                                </div>
                                <div class="swiper-slide single-why-choose-image">
                                    <img src="{{ asset('assets/images/start_product/star_1.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="why-choose-text">
                        <div class="section-heading">
                            <h2>Why Choose Us</h2>
                            <p class="m-0"> 
                                One of the most significant advantages of living in a residential complex is the availability
                                of various amenities that are not typically found in traditional residential properties.
                                These amenities may include swimming pools, fitness centers, playgrounds, community gardens,
                                and more. Such facilities can offer an enhanced quality of life for residents, making it easier
                                to stay active, socialize and pursue hobbies.
                            </p>
                            <button class="theme-primary-solid-button mt-4">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose .END -->

    <!-- CEO Section START -->
    <section class="ceo-info-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container">
            <div class="row align-items-center">
                <!-- left -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="ceo-text">
                        <div class="section-heading">
                            <h2>Borna Engineering is an Architectural based Engineering firm</h2>
                            <p class="m-0"> 
                                We are the quality based architectural practice in the whole Bangladesh to
                                follow a unique process to design deliver projects efficiently and quickly,
                                cost reducing and improving quality.
                            </p>
                            <button class="theme-primary-solid-button mt-4">More Details</button>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="ceo-image position-relative">
                        <img src="{{ asset('assets/images/ceo.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CEO .END -->

















    <!-- Banner Section START -->
    <!-- Banner .END -->


</div>
@endsection