@extends('layouts.main')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>CONTACT US</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.0197904827246!2d77.67230621425868!3d28.95713748229093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c655fa01add9f%3A0xcb6330608515f178!2sUmbrella%20Security%20Solutions!5e0!3m2!1sen!2sin!4v1616920002372!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
    </div>
  
    <section id="contact" class="contact">
        <div class="container">
  
            <div class="row justify-content-center" data-aos="fade-up">
  
                <div class="col-lg-10">
    
                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>22 B, Vishv Enclave, Sports Complex, Delhi Road Meerut-250002, India</p>
                            </div>
            
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:info@umbrellasolutions.in" title="info@umbrellasolutions.in" >info@umbrellasolutions.in</a></p>
                            </div>
            
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><a href='tel:+917088700526'>+91-7088700526</a><br><a href='tel:+916395471721'> +91-6395471721</a></p>
                            </div>
                        </div>
                    </div>
    
                </div>
  
            </div>
  
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="{{route("contact-us-form-mail-send")}}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection