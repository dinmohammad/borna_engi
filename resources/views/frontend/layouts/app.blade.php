<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="UTF-8" />
       <title>{{ config('app.name') }}</title>
       <meta name="title" content="Borna Engineering || Architects & Engineers" />
       <meta name="description" content="" />
       <meta name="keywords" content="" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <meta name="author" content="" />
       <meta property="og:type" content="page" />
       <meta property="og:title" content="" />
       <meta property="og:description" content="" />
       <meta property="og:image" content="" /> 
       <meta property="og:image:width" content="1200" />
       <meta property="og:image:height" content="630" />
       <meta name="brand_name" content="" />
       <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.jpg') }}" />
       <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
       <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- font-family: "Inter", sans-serif; -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />

       @yield('styles')
   </head>
   <body class="hidden hidden-ball smooth-scroll" data-primary-color="#f6be00">


        <main>
            <!-- Preloader -->
            <div id="preloader" class="preloader-activate preloader-active open_tm_preloader">
                <div class="preloader-area-wrap">
                    <div  class="spinner d-flex justify-content-center align-items-center h-100">
                        <img id="animated-gif" src="{{asset('assets/images/loader.gif')}}" alt="">
                    </div>
                </div>
            </div>
            <!--/Preloader -->

            <div class="cd-index cd-main-content" >
                <!-- Page Content -->
                <div id="page-content" class="light-content" data-bgcolor="#171717">
                    <!-- Header -->
                    @include('frontend.includes.header')
                    <!--/Header -->

                    <!-- Content Scroll -->
                    <div id="content-scroll">
                        <!-- Main -->
                        <div id="main">
                            @yield('content')
                        </div>
                        <!--/Main -->

                        <!-- Footer -->
                        @include('frontend.includes.footer')
                        <!--/Footer -->

                        <!-- Scroll TOP -->
                        <a
                            href="#"
                            class="scroll-top show"
                            id="scroll-top"
                            onClick={scrollToTop}
                        >
                            <i class="fa fa-long-arrow-up arrow-top" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!--/Content Scroll -->
                    <div id="app"></div>
                </div>
                <!--/Page Content -->
            </div>



            
        </main>


        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

        <script src="{{asset('assets/js/main.js')}}"></script>
       @yield('scripts')
   </body>
</html>
