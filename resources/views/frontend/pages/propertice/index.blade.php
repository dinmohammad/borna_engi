@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Page Breadcrumb Section START -->
    <section class="page-breadcrumb position-relative service-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb-wrap ">
                        <h1>Propertice</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Propertice</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumb .END -->

    <!-- all propertices Section START -->
    <section class="all-propertices-wrapper position-relative overflow-hidden section-padding-t-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-block text-center text-md-start d-md-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="section-heading ">
                            <h2>All Propertice</h2>
                            <p class="m-0"> 
                                Turpis facilisis tempor pulvinar in lobortis ornare magna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content section-content-top-margin">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-grid-wrapper">
                            <div class="grid">
                                <div class="grid-item grid-item--width2 gallery-item">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/1.jpeg') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item grid-item--width2 gallery-item">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/2.jpeg') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item grid-item--width2 gallery-item">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/3.jpeg') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item grid-item--width2 gallery-item">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/4.jpeg') }}" width="100%" heigth="500" alt="borna engineering product ">
                                        <div class="stb-bottom-content">
                                            <h5>Vintage Villa</h5>
                                            <div class="icon-with-text-wrap">
                                                <i class="fa fa-map-marker"></i>
                                                <span>2715 Ash Dr. San Jose, Dubai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item grid-item--width2 gallery-item">
                                    <div class="single-item-box position-relative">
                                        <img src="{{ asset('assets/images/products/5.jpeg') }}" width="100%" heigth="500" alt="borna engineering product ">
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
    <!-- all propertices .END -->
   
</div>
@endsection
