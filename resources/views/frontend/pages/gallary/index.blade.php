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
                        <img src="{{ asset('assets/images/products/1.jpeg') }}" class="img-fluid" alt="Banner One">
                        <a href="{{ asset('assets/images/products/1.jpeg') }}"
                        data-lightbox="company-gallery"
                        data-title="Banner One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item gallery-item">
                        <img src="{{ asset('assets/images/products/2.jpeg') }}" class="img-fluid" alt="BG Two">
                        <a href="{{ asset('assets/images/products/2.jpeg') }}"
                        data-lightbox="company-gallery"
                        data-title="BG Two"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item gallery-item">
                        <img src="{{ asset('assets/images/products/3.jpeg') }}" class="img-fluid" alt="Contact Background">
                        <a href="{{ asset('assets/images/products/3.jpeg') }}"
                        data-lightbox="company-gallery"
                        data-title="Contact Background"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/products/4.jpeg') }}" class="img-fluid" alt="Gallery One">
                        <a href="{{ asset('assets/images/products/4.jpeg') }}"
                        data-lightbox="company-gallery"
                        data-title="Gallery One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/products/5.jpeg') }}" class="img-fluid" alt="Gallery One">
                        <a href="{{ asset('assets/images/products/5.jpeg') }}"
                        data-lightbox="company-gallery"
                        data-title="Gallery One"
                        class="zoom-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="grid-item grid-item--width2 gallery-item">
                        <img src="{{ asset('assets/images/products/6.jpeg') }}" class="img-fluid" alt="Gallery One">
                        <a href="{{ asset('assets/images/products/6.jpeg') }}"
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
