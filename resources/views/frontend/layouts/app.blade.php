<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="UTF-8" />
       <title>{{ config('app.name') }}</title>
       <meta name="title" content="" />
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
       <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
       <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

       @yield('styles')
   </head>
   <body class="hidden hidden-ball smooth-scroll" data-primary-color="#f6be00">


        <main>
            <!-- Preloader -->
            
            <!--/Preloader -->

            <div class="cd-index cd-main-content">
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
                    </div>
                    <!--/Content Scroll -->

                    <div id="app"></div>
                </div>
                <!--/Page Content -->
            </div>
        </main>


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

       @yield('scripts')
   </body>
</html>
