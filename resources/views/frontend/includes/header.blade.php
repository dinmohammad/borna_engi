<div class="header-wrapper position-absolute top-0 w-100 z-2">
    @include('frontend.includes.top')

    <Header class="header-section position-relative overflow-hidden  bg-transparent">
        <header class="position-relative overflow-hidden bg-transparent">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                
                    <!-- Left: Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/Logo.png') }}" alt="borno engineering logo" width="136" height="100%">
                    </a>

                    <!-- Toggler for mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Right: Menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-service') }}">Our Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-service') }}">Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-service') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-service') }}">Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    </Header>
</div>



<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header bg-white">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/Logo.png') }}" alt="borno engineering logo" width="136" height="100%">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
    </div>
  <div class="offcanvas-body mobile-nav-body">
    <ul class=" list-unstyled p-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/our-service') }}">Our Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/our-service') }}">Properties</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/our-service') }}">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/our-service') }}">Contact Us
            </a>
        </li>
    </ul>
  </div>
</div>