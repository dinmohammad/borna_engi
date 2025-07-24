@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Page Breadcrumb Section START -->
    <section class="page-breadcrumb position-relative service-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb-wrap ">
                        <h1>Our Service</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumb .END -->

    <!-- All Services Section START -->
    <section class="all-services-wrapper position-relative overflow-hidden section-padding-t-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Architectural_White.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Architectural Design</h6>
                        <p class="text-white mt-4">The planning of your project starts here. Working together with you</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/3D_Visualization.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">3D Visualization</h6>
                        <p class="text-white mt-4">Visualization is a most important feature now a day. How will be the facade of the new building is the first and prime concern of our customers.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Structural_design.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Structural Design</h6>
                        <p class="text-white mt-4">Generally, structural engineers plan, design, and oversee the construction of structures such as buildings, dams, and bridges.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="single-item-box-two mb-4 theme-bg-primary  p-3">
                        <img src="{{ asset('assets/images/icons/Electrical Design.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Electrical Design</h6>
                        <p class="text-white mt-4">Preparation of detailed electrical drawing showing the location of the fans, light, and other amenities such as TV, fridge, Air conditioner.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Plumbing Design.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Plumbing Design</h6>
                        <p class="text-white mt-4">Our plumbing design team delivers highly accurate and reliable plumbing system designs that meet your sustainability goals.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Estimate.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Estimate & Costing</h6>
                        <p class="text-white mt-4">Cost considerations are an important part of planning services for clients. To assist users, the system automatically.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Details Drawing.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Details Drawing</h6>
                        <p class="text-white mt-4">Cost considerations are an important part of planning services for clients. To assist users, the system automatically estimates the.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Consultancy.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Consultancy</h6>
                        <p class="text-white mt-4">We provide clients with technical solutions and engineering advice. Our highly skilled consultants meet with clients to discuss</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/Construction.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Construction</h6>
                        <p class="text-white mt-4">Successful construction projects require a highly coordinated team effort. A construction engineer can be defined as a civil engineer</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-item-box-two mb-4 theme-bg-primary p-3">
                        <img src="{{ asset('assets/images/icons/3D_Visualization.svg') }}" width="60" heigth="60" alt="borna engineering product ">
                        <h6 class="text-white mt-3">Building Materials Supply</h6>
                        <p class="text-white mt-4">Building material is material used for construction. Many naturally occurring substances, such as clay, rocks, sand, and wood have been used to construct buildings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Services .END -->
    
    <!-- Banner Section START -->
    <!-- Banner .END -->
</div>
@endsection
