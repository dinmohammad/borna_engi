<div class="header-wrapper position-absolute top-0 w-100 z-2">
    @include('frontend.includes.top')

    <Header class="header-section position-relative overflow-hidden  bg-transparent">
        <header class="position-relative overflow-hidden bg-transparent">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                
                    <!-- Left: Image -->
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/Logo.png') }}" alt="borno engineering logo" width="136" height="100%">
                    </a>

                    <!-- Toggler for mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Right: Menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    </Header>
</div>