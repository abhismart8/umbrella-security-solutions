@extends('layouts.main')

@push('css')
<style>
    ul li .bullets {
    display: list-item;
    }

    ul li .bullets:before {
    content: "• ";
    }

    .about-us .content ul {
        list-style: none;
        padding: 0;
    }

    /* custom css */
    .btn-primary {
    padding: 8px 20px;
    border: 0;
    border-radius: 4px;
    background-color: #c51618 !important;
    border-color: #c51618 !important;
    }

    .btn-primary:hover, .btn-primary:active {
    padding: 8px 20px;
    border: 0;
    border-radius: 4px;
    background-color: #c51618 !important;
    border-color: #c51618 !important;
    transform: scale(1.2) perspective(1.2px);
    }

    .btn-primary:focus {
    outline: none !important;
    box-shadow: none !important;
    }
</style>
@endpush

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('{{asset('assets/img/slide/slide-4.jfif')}}');">
                {{-- <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Vehicle <span>Tracking</span></h2>
                        <p>Vehicle Tracking System or commonly known as GPS tracker, is a technology that combines the tracking of the location of a vehicle with a software interface that displays vehicle data. This data can be later used by companies as business intelligence in order to make informed decisions.</p>
                    </div>
                </div> --}}
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('{{asset('images/gps-image.jpg')}}');">
                {{-- <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>CCTV</h2>
                        <p>The systems are best defined by the types of cameras used. There are two common types of cameras in use today: Analog and IP-based cameras. With increase of technology IP based cameras are highly in demand but Analog cameras has not lost the significance either due to its cost effectiveness and comparable efficiency and quality.</p>
                    </div>
                </div> --}}
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('{{asset('images/gps-slide-1.jpeg')}}');">
                {{-- <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Home Security</h2>
                        <p>As the technology is advancing day by day therefore with the usage of upgraded technology, there comes a complete set to protect your home or your commercial premises at the moment of theft or at the moment of any external insurgency.</p>
                    </div>
                </div> --}}
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= Vehicle Tracking Description Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Vehicle Tracking <span style="color: #c51618;">System</span></strong></h2>
            </div>

            <div class="row content">
                <div class="col-lg-12" data-aos="fade-right">
                    <p class="h5"><b>Vehicle Tracking System</b> or commonly known as GPS tracker, is a technology that combines the tracking of the location of a 
                        vehicle with a software interface that displays vehicle data. This data can be later used by companies as business 
                        intelligence in order to make informed decisions.
                    </p>
                    <br><br>
                    <div class="col-lg-12 text-center" data-aos="fade-left">
                        <ul class="h3 bullets">
                            <li>PROTECT YOUR <span style="color: #c51618;">VEHICLE</span></li>
                            <li>TRACK YOUR <span style="color: #c51618;">VEHICLE</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Vehicle Tracking Description Section -->

    <!-- ======= Vehicle Tracking Description Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Features</strong></h2>
            </div>

            <div class="row content">
                <div class="col-lg-12" data-aos="fade-right">
                    <ul class="h5 arrow">
                        <li><i class="pt-1 ri-check-double-line"></i>Remote/Mobile Access</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Live Tracking</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Reports Generation</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Accurate Notifications</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Over speed Alarm</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Landmarks and Geo-fence</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Immobilizer– Engine Cut-off in case of Emergency</li>
                        <li><i class="pt-1 ri-check-double-line"></i>Compact Hardware and User-friendly software</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Vehicle Tracking Description Section -->

</main>
<!-- End #main -->
@endsection