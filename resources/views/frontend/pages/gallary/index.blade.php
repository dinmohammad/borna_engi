@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Page Breadcrumb Section START -->
    <section class="page-breadcrumb position-relative service-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb-wrap ">
                        <h1>Gallary</h1>
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
    <section class="company-gallery-wrapper section-padding-t-70">
        <div class="container">
            <div class="gallery-grid-wrapper">
                <div class="grid">
                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/banner/banner_one.png') }}" class="img-fluid" alt="Banner One">
                        <a href="{{ asset('assets/images/banner/banner_one.png') }}"
                        data-lightbox="company-gallery"
                        data-title="Banner One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item gallery-item">
                        <img src="{{ asset('assets/images/banner/bg-2.png') }}" class="img-fluid" alt="BG Two">
                        <a href="{{ asset('assets/images/banner/bg-2.png') }}"
                        data-lightbox="company-gallery"
                        data-title="BG Two"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item gallery-item">
                        <img src="{{ asset('assets/images/banner/contact_bg.png') }}" class="img-fluid" alt="Contact Background">
                        <a href="{{ asset('assets/images/banner/contact_bg.png') }}"
                        data-lightbox="company-gallery"
                        data-title="Contact Background"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/gallary/gallary-1.png') }}" class="img-fluid" alt="Gallery One">
                        <a href="{{ asset('assets/images/gallary/gallary-1.png') }}"
                        data-lightbox="company-gallery"
                        data-title="Gallery One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/products/product_1.png') }}" class="img-fluid" alt="Gallery One">
                        <a href="{{ asset('assets/images/products/product_1.png') }}"
                        data-lightbox="company-gallery"
                        data-title="Gallery One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- all propertices .END -->

    
   
</div>
@endsection
