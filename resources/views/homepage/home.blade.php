@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-4.jfif);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Vehicle <span>Tracking System</span></h2>
                        <p>Vehicle Tracking System or commonly known as GPS tracker, is a technology that combines the tracking of the location of a vehicle with a software interface that displays vehicle data. This data can be later used by companies as business intelligence in order to make informed decisions.</p>
                        <div class="text-center"><a href="{{route('vehicle-tracking-view')}}" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-5.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>CCTV Surveillance System</h2>
                        <p>The systems are best defined by the types of cameras used. There are two common types of cameras in use today: Analog and IP-based cameras. With increase of technology IP based cameras are highly in demand but Analog cameras has not lost the significance either due to its cost effectiveness and comparable efficiency and quality.</p>
                        <div class="text-center"><a href="{{route('cctv-view')}}" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-6.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Home/Commercial Security Alarm System</h2>
                        <p>As the technology is advancing day by day therefore with the usage of upgraded technology, there comes a complete set to protect your home or your commercial premises at the moment of theft or at the moment of any external insurgency.</p>
                        <div class="text-center"><a href="{{route('home-security-view')}}" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
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
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</strong></h2>
            </div>

            <div class="row content">
                <div class="col-lg-12 text-center" data-aos="fade-right">
                    <h2>ONE STOP SOLUTION FOR <span style="color: #c51618;">ELECTRONIC SECURITY</span></h2>
                    <h3>One Stop Solution for all Electronic Security Concerns viz. Vehicle Tracking System, CCTV Surveillance, Access Control, Attendance System, Home Security, Commercial Security, Fire Fighting Equipments and many more...</h3>
					<br><br>
                    <p class="h5">
                        <span style="color: #c51618;">HAVE YOU TAKEN SECURITY INSURANCE FOR YOUR HOME/ORGANIZATION/VEHICLE ? ? ?<br>
						<br>
                        IF NOT<br>
						<br>
                        THEN, WHAT ARE YOU WAITING FOR ?  ?  ?</span><br>
						<br>
                        <b>Connect with our Security Experts and get the customized solutions</b>.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</strong></h2>
                <p>We are proud to tell you thar we offer all below listed services</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                        	<img src="{{asset('images/GPS-image.jpg')}}" class="img-fluid"/>
                        </div>
                        <h4><a href="{{route('vehicle-tracking-view')}}">Vehicle Tracking System</a></h4>
                        <p>Vehicle Tracking System or commonly known as GPS tracker, is a technology that combines the tracking 
                            of the location of a vehicle with a software interface that displays vehicle data. This data can be later used by companies 
                            as business intelligence in order to make informed decisions.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                        	<img src="{{asset('images/cctv-image.png')}}" class="img-fluid"/>
                        </div>
                        <h4><a href="{{route('cctv-view')}}">CCTV Surveillance System</a></h4>
                        <p>The systems are best defined by the types of cameras used. There are two common types of cameras in use today: Analog and IP-based cameras. With increase of technology IP based cameras are highly in demand but Analog cameras has not lost the significance either due to its cost effectiveness and comparable efficiency and quality.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
							<img src="{{asset('images/HSS-image.jpg')}}" class="img-fluid"/>
                        </div>
                        <h4><a href="{{route('home-security-view')}}">Home/Commercial Security Alarm System</a></h4>
                        <p>As the technology is advancing day by day therefore with the usage of upgraded technology, there comes a complete set to protect your home or your commercial premises at the moment of theft or at the moment of any external insurgency.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
							<img src="{{asset('images/Biometric-image.jpg')}}" class="img-fluid"/>
                        </div>
                        <h4><a href="{{route('access-control-system-view')}}">Access Control System</a></h4>
                        <p>Access control systems are the electronic systems that are designed to control through a network and they should have an access to a network. Access Control System recognizes authenticates and authorizes entry of a person to enter into the premise thereby giving complete protection ensuring security with the system.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
							<img src="{{asset('images/misc-image.jpg')}}" class="img-fluid"/>
                        </div>
                        <h4><a href="{{route('misc-view')}}">Miscellaneous</a></h4>
                        <p>There are numerous other security gadgets and equipments which are of high use in day to day routine. We have a huge range of such kind of unique and innovative products. Our Research and Development Wing is continuously working to provide the best gadgets at best possible rates.</p>
                    </div>
                </div>
            </div>

                {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Divera Don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{asset("assets/img/testimonials/testimonials-7.jpg")}}" class="testimonial-img" alt="">
                        <h3>Abhishek Shukla</h3>
                        <h4>Software Developer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I wanted parking sensors for my car, i reached umbrella solutions through a friend, and i received a great service from them, with brillent product, its working great. I would definitely recommand them.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
    
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-item mt-4 mt-lg-0">
                        <img src="{{asset("assets/img/testimonials/testimonials-8.jpg")}}" class="testimonial-img" alt="">
                        <h3>Lalit Gaur</h3>
                        <h4>Business Development Associate</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I was searching for a GPS tracking device for my car, i found umbrella security solutions and contacted them, and got a great GPS device for my car, with App installed for live tracking, its working like a charm.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

</main>
<!-- End #main -->
@endsection