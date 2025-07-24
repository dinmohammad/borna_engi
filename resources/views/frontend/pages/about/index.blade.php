@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Page Breadcrumb Section START -->
    <section class="page-breadcrumb position-relative service-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb-wrap ">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumb .END -->

    <!-- aboutme Section START -->
    <section class="about-me-wrapper position-relative overflow-hidden section-padding-tb-70">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <!-- left -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="why-choose-image">
                        <img src="{{ asset('assets/images/banner/bg-2.png') }}" width="100%" heigth="100%" alt="borna engineering product ">
                    </div>
                </div>
                <!-- right -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="why-choose-text">
                        <div class="section-heading">
                            <h2>A Legacy Written in Concrete</h2>
                            <p class="m-0"> 
                                One of the most significant advantages of living in a residential complex is the availability of various amenities that are not typically found in traditional residential properties. These amenities may include swimming pools, fitness centers, playgrounds, community gardens, and more. Such facilities can offer an enhanced quality of life for residents, making it easier to stay active, socialize and pursue hobbies.
                            </p>
                            <button class="theme-primary-solid-button mt-4">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- aboutme .END -->


    <!-- cound down Section START -->
    <section class="success-project-wrapper theme-bg-primary position-relative overflow-hidden section-padding-tb-70">
        <div class="container py-0 py-lg-5">
            <div class="project-count-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="counter-box">
                            <div class="counter text-white" data-target="64">0</div>
                            <div class="description">Districts Completed</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="counter-box">
                            <div class="counter text-white" data-target="1100">0</div>
                            <div class="description">Project Complete</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="counter-box mt-0">
                            <div class="counter text-white" data-target="11">0</div>
                            <div class="description">Finished Projects</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="counter-box mt-0">
                            <div class="counter text-white" data-target="1205">0</div>
                            <div class="description">Happy Clients</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- cound down .END -->
    
    <!-- Company Terget Section START -->
    <section class="company-target-wrapper position-relative overflow-hidden section-padding-t-70">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="company-tw-left">
                        <h2 class="heading  me-5">
                            <span class="mark-text" id="experience_year">08</span>
                            Years’ <br> Experience <br> in IT
                        </h2>
                        <h5 class="heading mt-4"><strong>Learn more about our Success Stories</strong></h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="company-tw-right">
                        <h5><strong>Mission</strong></h5>
                        <p>Cluster housing perumnas is located in an area that is easily accessible from various directions. You can reach the city center, airport, train station, bus terminal, and other important places easily and quickly.</p>
                        
                        <h5><strong>Vission</strong></h5>
                        <p>Cluster housing perumnas has a modern and elegant house design. You can choose the type of house that suits your taste and needs, ranging from type 36 to type 120. </p>
                        
                        <h5><strong>Goal</strong></h5>
                        <p>Cluster housing perumnas has an integrated security system. Each cluster is equipped with a fence, gate, and guard post that are monitored by professional security officers. In addition, each house is also equipped with a fire alarm and CCTV.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company Terget .END -->
</div>
@endsection
