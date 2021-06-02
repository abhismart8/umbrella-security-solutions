<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use a heading logo -->
      {{-- <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo mr-auto"><img src="{{asset(config("constants.brand.company_logo_dark"))}}" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active home-menu"><a href="/">Home</a></li>
                <li class="about-menu"><a href="/about-us">About Us</a></li>
                <li class="drop-down service-menu"><a href="javascript:;">Services</a>
                    <ul>
                        <li><a href="{{route('vehicle-tracking-view')}}">Vehicle Tracking System</a></li>
                        <li><a href="{{route('cctv-view')}}">CCTV Surveillance System</a></li>
                        <li><a href="{{route('home-security-view')}}">Home/Commercial Security Alarm System</a></li>
                        <li><a href="{{route('access-control-system-view')}}">Access Control System</a></li>
                        <li><a href="{{route('misc-view')}}">Miscellaneous</a></li>
                    </ul>
                </li>
                <li class="testimonial-menu"><a href="javascript:;">Testimonials</a></li>
                <li class="contact-menu"><a href="/contact-us">Contact Us</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->
        @if(isset($page) && $page == 'vehicle-tracking')
            <div class="ml-5 d-flex gps-tracking-class">
                <a href="http://track.umbrellasolutions.in" class="btn btn-primary" target="_blank">GPS Track</a>
            </div>
        @else
            <div class="header-social-links d-flex">
                <a href="https://www.facebook.com/UmbrellaVentures" class="facebook mr-3" target="_blank"><i class="icofont-facebook"></i></a>
                <a href="javascript:;" class="instagram mr-3" target="_blank"><i class="icofont-instagram"></i></a>
                <a href="javascript:;" class="linkedin mr-3" target="_blank"><i class="icofont-linkedin"></i></a>
            </div>
        @endif

    </div>
</header>
<!-- End Header -->