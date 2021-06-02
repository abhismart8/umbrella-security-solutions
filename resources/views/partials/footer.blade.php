<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>{{config("constants.brand.company_full_name")}}</h3>
                <p>
                    22 B, Vishv Enclave <br>
                    Sports Complex, Delhi Road<br>
                    Meerut-250002, India <br><br>
                    <strong>Phone:</strong> <a href='tel:+917088700526'>+91-7088700526</a><br>&emsp;&emsp;&emsp;&nbsp; <a href='tel:+916395471721'> +91-6395471721</a><br>
                    <strong>Email:</strong> <a href="mailto:info@umbrellasolutions.in" title="info@umbrellasolutions.in" >info@umbrellasolutions.in</a><br>
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/about-us">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/contact-us">Contact Us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="javascript:;">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('vehicle-tracking-view')}}">Vehicle Tracking System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('cctv-view')}}">CCTV Surveillance System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('home-security-view')}}">Home/Commercial Security Alarm System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('access-control-system-view')}}">Access Control System</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('misc-view')}}">Miscellaneous</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>Subscribe for newsletter for any new updates</p>
                <form action="javascript:;" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
            Copyright &copy; 2021 <strong><span>{{config("constants.brand.company_full_name")}}</span></strong>.
            </div>
            <div class="credits">
                All Rights Reserved. Designed by <a href="https://github.com/abhismart8" target="_blank" style="font-size: 13px !important;">ABHISHEK SHUKLA</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://www.facebook.com/UmbrellaVentures" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="javascript:;" class="instagram"><i class="bx bxl-instagram" target="_blank"></i></a>
            <a href="javascript:;" class="linkedin"><i class="bx bxl-linkedin" target="_blank"></i></a>
        </div>
    </div>
</footer>
<!-- End Footer -->