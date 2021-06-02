<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("assets/vendor/jquery-sticky/jquery.sticky.js")}}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/venobox/venobox.min.js")}}"></script>
  <script src="{{asset("assets/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("assets/js/main.js")}}"></script>
  <script>
    // to change the active tab
    var current = {!! json_encode($current) !!};

    $.each($('.nav-menu').find('ul').find('li'), function( index ) {
      $(this).removeClass('active');
    });

    $.each($('.mobile-nav').find('ul').find('li'), function( index ) {
      $(this).removeClass('active');
    });

    if(current == 'home')
    {
      $('.nav-menu').find('ul').find('li.home-menu').addClass('active');
      $('.mobile-nav').find('ul').find('li.home-menu').addClass('active');
    }
    else if(current == 'about')
    {
      $('.nav-menu').find('ul').find('li.about-menu').addClass('active');
      $('.mobile-nav').find('ul').find('li.about-menu').addClass('active');
    }
    else if(current == 'contact')
    {
      $('.nav-menu').find('ul').find('li.contact-menu').addClass('active');
      $('.mobile-nav').find('ul').find('li.contact-menu').addClass('active');
    }
    else if(current == 'service')
    {
      $('.nav-menu').find('ul').find('li.service-menu').addClass('active');
      $('.mobile-nav').find('ul').find('li.service-menu').addClass('active');
    }
    else
    {
      $('.nav-menu').find('ul').find('li.home-menu').addClass('active');
      $('.mobile-nav').find('ul').find('li.home-menu').addClass('active');
    }
    
  </script>