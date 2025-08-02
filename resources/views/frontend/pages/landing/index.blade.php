@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Banner Section START -->
    <section class="hero-wrapper position-relative text-white">
        <div class="swiper mySwiper" id="banner_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-slider-single hero-image-one">
                    </div>
                    <div class="hero-mid-content translate-middle-y position-absolute top-50 text-center">
                        <div class="hero-mc-header">
                            <h1 class="display-4 ">Find Your Dream Home</h1>
                            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-slider-single hero-image-two">
                    </div>
                    <div class="hero-mid-content translate-middle-y position-absolute top-50 text-center">
                        <div class="hero-mc-header">
                            <h1 class="display-4 ">Find Your Dream Home</h1>
                            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-slider-single hero-image-three">
                    </div>
                    <div class="hero-mid-content translate-middle-y position-absolute top-50 text-center">
                        <div class="hero-mc-header">
                            <h1 class="display-4 ">Find Your Dream Home</h1>
                            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-slider-single hero-image-four">
                    </div>
                    <div class="hero-mid-content translate-middle-y position-absolute top-50 text-center">
                        <div class="hero-mc-header">
                            <h1 class="display-4 ">Find Your Dream Home</h1>
                            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="hero-filter-content position-absolute bottom-0 pb-5 w-100 text-center z-1" id="hero_filter_content">
            <div class="bg-white p-4 p-md-4 rounded shadow d-block d-md-flex flex-column flex-md-row align-items-center w-100 mx-auto gap-4" style="max-width: 1096px;">

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
    <section class="highlight-product-wrapper position-relative overflow-hidden section-padding-tb-70" id="highlight_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 position-relative">
                    <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="section-heading">
                            <h2>Highlighted Projects</h2>
                            <p class="m-0">Turpis facilisis tempor pulvinar in lobortis ornare magna.</p>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="position-relative highlight-swiper-button-wrap" style="width: 140px !important;">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="section-content section-content-top-margin">
                        <div class="swiper product_slider overflow-visible">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-item-box position-relative">
                                        <div class="stb-image hover-image-animation">
                                            <img src="{{ asset('assets/images/products/1.jpeg') }}" width="100%" height="auto" alt="borna engineering product ">
                                        </div>
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
                                        <div class="stb-image hover-image-animation">
                                            <img src="{{ asset('assets/images/products/2.jpeg') }}" width="100%" height="auto" alt="borna engineering product ">
                                        </div>
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
                                        <div class="stb-image hover-image-animation">
                                            <img src="{{ asset('assets/images/products/3.jpeg') }}" width="100%" height="auto" alt="borna engineering product ">
                                        </div>
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
                                        <div class="stb-image hover-image-animation">
                                            <img src="{{ asset('assets/images/products/4.jpeg') }}" width="100%" height="auto" alt="borna engineering product ">
                                        </div>
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
                                        <div class="stb-image hover-image-animation">
                                            <img src="{{ asset('assets/images/products/5.jpeg') }}" width="100%" height="auto" alt="borna engineering product ">
                                        </div>
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Highlight Product .END -->

    <!-- Success Project Section START -->
    <section class="success-project-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container py-0 py-lg-5">
            <div class="row">
                <!-- Counters -->
                <div class="col-xl-6 col-lg-6 col-md-12">
                   <div class="project-count-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-3 col-sm-6 col-6">
                                <div class="counter-box">
                                    <div class="counter" data-target="64">0</div>
                                    <div class="description">Districts Completed</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-sm-6 col-6">
                                <div class="counter-box">
                                    <div class="counter" data-target="1100">0</div>
                                    <div class="description">Project Complete</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-sm-6 col-6">
                                <div class="counter-box mt-0 mt-lg-5">
                                    <div class="counter" data-target="11">0</div>
                                    <div class="description">Finished Projects</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-sm-6 col-6">
                                <div class="counter-box mt-0 mt-lg-5">
                                    <div class="counter" data-target="1205">0</div>
                                    <div class="description">Happy Clients</div>
                                </div>
                            </div>

                        </div>
                   </div>
                </div>

                <!-- Text and CTA -->
                <div class="col-xl-6 col-lg-6 col-md-12 ">
                    <div class="section-heading">
                        <h2>We use Real Estate to show our appreciation of the world.</h2>
                        <p class="m-0">We provide equity and debt capital globally to back projects that make an impact.</p>
                        <a href="{{ url('/our-service') }}" class="theme-primary-solid-button mt-4 d-inline-block">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Project .END -->

    <!-- Why Choose Section START -->
    <section class="why-choose-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <!-- left -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="why-choose-image">
                        <div class="swiper why_choose_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-why-choose-image">
                                    <div class="hover-image-animation">
                                        <img src="{{ asset('assets/images/start_product/1.jpg') }}" width="100%" height="auto" alt="borna engineering product ">
                                    </div>
                                </div>
                                <div class="swiper-slide single-why-choose-image">
                                    <div class="hover-image-animation">
                                        <img src="{{ asset('assets/images/start_product/2.jpg') }}" width="100%" height="auto" alt="borna engineering product ">
                                    </div>
                                </div>
                                <div class="swiper-slide single-why-choose-image">
                                    <div class="hover-image-animation">
                                        <img src="{{ asset('assets/images/start_product/3.jpg') }}" width="100%" height="auto" alt="borna engineering product ">
                                    </div>
                                </div>
                                <div class="swiper-slide single-why-choose-image">
                                    <div class="hover-image-animation">
                                        <img src="{{ asset('assets/images/start_product/4.jpg') }}" width="100%" height="auto" alt="borna engineering product ">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Navigation buttons -->
                        <div class="pagination-wrap position-relative" style="width: 140px !important">
                             <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
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
                            <a href="{{ url('/our-service') }}" class="theme-primary-solid-button mt-4 d-inline-block">Know More</a>
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
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="ceo-text">
                        <div class="section-heading">
                            <h2>Borna Engineering is an Architectural based Engineering firm</h2>
                            <p class="m-0"> 
                                We are the quality based architectural practice in the whole Bangladesh to
                                follow a unique process to design deliver projects efficiently and quickly,
                                cost reducing and improving quality.
                            </p>
                            <button class="theme-primary-solid-button mt-4">More Details</button>

                            <ul class="object-social-links p-0 m-0 text-capitalize list-unstyled d-flex gap-3 mt-4">
                                <li class="text-dark">
                                    <a target="_blank" href="https://www.youtube.com/@BornaEngineering">
                                        YOUTUBE
                                    </a>
                                </li>
                                <li class="text-dark">
                                    <a target="_blank" href="https://www.facebook.com/Boshorsiddiqe/">
                                        FACEBOOK
                                    </a>
                                </li>
                                <li class="text-dark">
                                    <a target="_blank" href="https://www.linkedin.com/in/engr-boshor-siddique-394618154/?originalSubdomain=bd">
                                        LINKEDIN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="ceo-image position-relative">
                        <img src="{{ asset('assets/images/ceo_1.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CEO .END -->

    <!-- Our Service Section START -->
    <section class="our-service-wrapper position-relative overflow-hidden section-padding-tb-70 theme-bg-primary" id="our_service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="section-heading w-50">
                            <h2 class="text-white">Our Services</h2>
                            <p class="m-0 text-white"> 
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia curae; Proin sodales ultrices nulla blandit volutpat.
                            </p>
                        </div>
                        <a href="{{ url('/our-service') }}" class="theme-white-solid-button mt-4 d-inline-block">View All</a>
                    </div>
                </div>
            </div>


            <div class="section-content section-content-top-margin">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-item-box-two active p-3">
                            <img src="{{ asset('assets/images/icons/Architectural_White.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                            <h6 class="text-white mt-3">Architectural Design</h6>
                            <p class="text-white mt-4">The planning of your project starts here. Working together with you</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-item-box-two p-3">
                            <img src="{{ asset('assets/images/icons/3D_Visualization.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                            <h6 class="text-white mt-3">Architectural Design</h6>
                            <p class="text-white mt-4">The planning of your project starts here. Working together with you</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-item-box-two p-3">
                            <img src="{{ asset('assets/images/icons/Structural_design.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                            <h6 class="text-white mt-3">Architectural Design</h6>
                            <p class="text-white mt-4">The planning of your project starts here. Working together with you</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-item-box-two p-3">
                            <img src="{{ asset('assets/images/icons/Free_marketing.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                            <h6 class="text-white mt-3">Architectural Design</h6>
                            <p class="text-white mt-4">The planning of your project starts here. Working together with you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Service .END -->

    <!-- Client Testimonials Section START -->
    <section class="client-testimonials-wrapper position-relative overflow-hidden section-padding-tb-70 theme-bg-primary" id="client_testimonials_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="section-heading w-50">
                            <h2 class="text-white">Client Testimonials</h2>
                            <p class="m-0 text-white"> 
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere  cubilia curae; Proin sodales ultrices nulla blandit volutpat.
                            </p>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="client-testi-pagination position-relative" style="width: 142px !important;">
                            <div class="swiper-button-prev bg-white"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section-content section-content-top-margin">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper client_testimonials_slider" id="client_testimonials_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-test-image d-block d-md-flex align-items-start gap-3">
                                    <div class="swci-text position-relative bg-white p-5">
                                        <p>I uploaded my floor plans, chose stunning furniture and decor, and within minutes, I had photorealistic renderings that showcased the potential of the remodeled space.</p>

                                        <h6>Hannah Burress</h6>
                                        <span>Freelancer</span>

                                        <div class="quotes-icon-wrap position-absolute text-end w-100">
                                            <img class="object-fit-cover" src="{{ asset('assets/images/icons/quotes_1.png') }}" height="80" width="80"  alt="borna engineering product ">
                                        </div>
                                    </div>
                                    <img class="object-fit-cover" src="{{ asset('assets/images/testimonials/client-1.png') }}" height="286" width="286"  alt="borna engineering product ">
                                </div>
                                <div class="swiper-slide single-test-image d-block d-md-flex align-items-start gap-3">
                                    <div class="swci-text position-relative bg-white p-5">
                                        <p>I uploaded my floor plans, chose stunning furniture and decor, and within minutes, I had photorealistic renderings that showcased the potential of the remodeled space.</p>

                                        <h6>Hannah Burress</h6>
                                        <span>Freelancer</span>

                                        <div class="quotes-icon-wrap position-absolute text-end w-100">
                                            <img class="object-fit-cover" src="{{ asset('assets/images/icons/quotes_1.png') }}" height="80" width="80"  alt="borna engineering product ">
                                        </div>
                                    </div>
                                    <img class="object-fit-cover" src="{{ asset('assets/images/testimonials/client-1.png') }}" height="286" width="286"  alt="borna engineering product ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonials .END -->


    <!-- Video Section START -->
    <section class="video-wrapper position-relative overflow-hidden">
        <div class="video-header-wrapper section-padding-tb-70 theme-bg-primary" id="video_header_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div class="section-heading w-50">
                                <h2 class="text-white">Have a look</h2>
                                <p class="m-0 text-white"> 
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin sodales ultrices nulla blandit volutpat.
                                </p>
                            </div>
                            <a href="https://www.youtube.com/@BornaEngineering" target="_blank" class="theme-white-solid-button mt-4 d-inline-block">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content-wrapper section-content-top-margin" id="video_content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper video_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide youtube-thumbnail position-relative" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-id="43uo7FRDHDI">
                                    <img class=" object-fit-cover" src="https://img.youtube.com/vi/43uo7FRDHDI/hqdefault.jpg" width="100%" alt="YouTube Thumbnail">
                                    <div class="play-button">
                                        <img class="video-thumbnail" src="{{ asset('assets/images/icons/play.png')}}" width="60" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide youtube-thumbnail position-relative" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-id="JvdU0kN9swk">
                                    <img class=" object-fit-cover" src="https://img.youtube.com/vi/JvdU0kN9swk/hqdefault.jpg" width="100%" alt="YouTube Thumbnail">
                                    <div class="play-button">
                                        <img src="{{ asset('assets/images/icons/play.png')}}" width="60" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide youtube-thumbnail position-relative" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-id="i163RsDQIvc">
                                    <img class=" object-fit-cover" src="https://img.youtube.com/vi/i163RsDQIvc/hqdefault.jpg" width="100%" alt="YouTube Thumbnail">
                                    <div class="play-button">
                                        <img src="{{ asset('assets/images/icons/play.png')}}" width="60" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide youtube-thumbnail position-relative" data-bs-toggle="modal" data-bs-target="#youtubeModal" data-id="NEMr3DvJ5No">
                                    <img class=" object-fit-cover" src="https://img.youtube.com/vi/NEMr3DvJ5No/hqdefault.jpg" width="100%" alt="YouTube Thumbnail">
                                    <span class="play-button">
                                        <img src="{{ asset('assets/images/icons/play.png')}}" width="60" alt="">
                                    </span>
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe id="youtubeIframe" src="" title="YouTube video" allowfullscreen allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Video .END -->

    <!-- Gallary Section START -->
    <section class="gallary-wrapper position-relative overflow-hidden section-padding-tb-70" id="gallary_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="section-heading w-50">
                            <h2>Gallary</h2>
                        </div>
                        <a href="{{ url('/gallary') }}" class="theme-primary-solid-button mt-4 d-inline-block">View All</a>
                    </div>
                </div>
            </div>

            <div class="section-content section-content-top-margin">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper gallary_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/banner/1.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/banner/2.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/banner/3.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/banner/4.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/banner/5.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="pagination-wrap position-relative" style="width: 140px !important">
                             <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallary .END -->

    <!-- Find  Best Place Section START -->'
    <section class="find-best-place-wrapper position-relative overflow-hidden section-padding-tb-70" id="find_best_place_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="find-best-content-wrap text-center my-5">
                        <div class="section-heading w-50 mx-auto">
                            <h2 class="text-white">Find Best Place For Living</h2>
                            <p class="m-0 text-white"> 
                                Spend vacations in best hotels and resorts find the great place of your
                                choice using different searching options.
                            </p>
                            <a href="{{ url('/contact-us') }}" class="theme-white-solid-button mt-4 d-inline-block">Contact Us</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find  Best Place .END -->

    <!-- Faq Section START -->
    <section class="faq-wrapper position-relative overflow-hidden section-padding-t-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <div class="section-heading">
                        <h2>Frequently Asked <br> Questions</h2>
                        <p class="m-0"> 
                            If there are question you want to ask. We will answer all your question.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <div class="faq-content">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    What is cluster housing perumnas?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Cluster housing perumnas is a housing concept that consists of several houses in a gated cluster. It offers comfortable, secure, and affordable housing with various complete and modern facilities.
                                </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Where is the location of cluster housing perumnas?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Cluster housing perumnas is located in several areas across the region, accessible from key routes.
                                </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How much are the prices and types of houses in cluster housing perumnas?
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The prices and types vary depending on the location and house design. Please contact us for detailed pricing.
                                </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    What are the facilities provided in cluster housing perumnas?
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Facilities include 24/7 security, playgrounds, parks, community centers, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq .END -->

    <!-- Banner Section START -->
    <!-- Banner .END -->


</div>
@endsection


@section('scripts')

@endsection