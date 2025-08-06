<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo.png')}}" height="45px"  width="auto" alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.product.index')}}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
                <li> 
                    <a href="{{ route('admin.product.create')}}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Banner Section</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.banner-slider.index')}}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
                <li> 
                    <a href="{{ route('admin.banner-slider.create')}}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Youtube Video</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.youtube-video.index')}}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
                <li> 
                    <a href="{{ route('admin.youtube-video.create')}}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>