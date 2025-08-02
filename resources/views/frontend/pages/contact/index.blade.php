@extends('frontend.layouts.app')
@section('content')
<div class="main-wrapper">
    <!-- Page Breadcrumb Section START -->
    <section class="page-breadcrumb position-relative service-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb-wrap ">
                        <h1>Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Breadcrumb .END -->

    <!-- all propertices Section START -->
    <section class="contact-us-wrapper section-padding-t-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <a href="tel:+8801763851107" target="_blank">
                        <div class="single-box-item-three position-relative">
                            <img src="{{ asset('assets/images/contacts/Card_1.png')}}" alt="" height="306" width="100%">
                            <div class="sbit-hover-text p-3 position-absolute bottom-0 w-100 theme-bg-primary d-flex justify-content-between align-items-center gap-2">
                                <div>
                                    <h5 class="text-white">Chat to Support</h5>
                                    <p class="p-0 m-0 text-white">Have Questions?  <br> We're Here to Help!</p>
                                </div>
                                <img src="{{asset('assets/images/icons/live-chat.png')}}" height="60px" width="auto" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <a href="https://maps.app.goo.gl/L1iGVLhdW4jrvR9P7" target="_blank">
                        <div class="single-box-item-three position-relative">
                            <img src="{{ asset('assets/images/contacts/Card_2.png')}}" alt="" height="306" width="100%">
                            <div class="sbit-hover-text p-3 position-absolute bottom-0 w-100 theme-bg-primary d-flex justify-content-between align-items-center gap-2">
                                <div>
                                    <h5 class="text-white">Visit us</h5>
                                    <p class="p-0 m-0 text-white">Have Questions?  <br> Come meet our team today!</p>
                                </div>
                                <img src="{{asset('assets/images/icons/map.png')}}" height="60px" width="60" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <a href="mailto:bornaengineering@gmail.com">
                        <div class="single-box-item-three position-relative">
                            <img src="{{ asset('assets/images/contacts/card_3.png')}}" alt="" height="306" width="100%">
                            <div class="sbit-hover-text p-3 position-absolute bottom-0 w-100 theme-bg-primary d-flex justify-content-between align-items-center gap-2">
                                <div>
                                    <h5 class="text-white">Mail Send</h5>
                                    <p class="p-0 m-0 text-white">Have Questions?  <br> We're ready to respond quickly!</p>
                                </div>
                                <img src="{{asset('assets/images/icons/user.png')}}" height="60px" width="60" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <a href="tel:+8801763851107">
                        <div class="single-box-item-three position-relative">
                            <img src="{{ asset('assets/images/contacts/card_4.png')}}" alt="" height="306" width="100%">
                            <div class="sbit-hover-text p-3 position-absolute bottom-0 w-100 theme-bg-primary d-flex justify-content-between align-items-center gap-2">
                                <div>
                                    <h5 class="text-white">Call Us</h5>
                                    <p class="p-0 m-0 text-white">Have Questions?  <br> Mon-Fri, 8 AM – 5 PM</p>
                                </div>
                                <img src="{{asset('assets/images/icons/call-center-agent.png')}}" height="60px" width="60" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- all propertices .END -->

    
   
</div>
@endsection
