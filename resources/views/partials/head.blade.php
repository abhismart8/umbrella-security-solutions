<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>{{config("constants.brand.company_tag_line")}} - {{config("constants.brand.company_full_name")}}</title>
<meta content="{{ config('constants.brand.company_tag_line') }}" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset(config('constants.brand.favicon_32')) }}" sizes="32x32" />
<link rel="icon" href="{{ asset(config('constants.brand.favicon_64')) }}" sizes="6xx64" />
<link rel="icon" href="{{ asset(config('constants.brand.favicon_128')) }}" sizes="128x128" />
<link rel="apple-touch-icon-precomposed" href="{{ asset(config('constants.brand.favicon_128')) }}" />
<meta name="msapplication-TileImage" content="{{ asset(config('constants.brand.favicon_256')) }}" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/venobox/venobox.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
<link href="{{asset("assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

<style>
    .phone {
        margin-top: 10px;
    }
    .phone i {
        font-size: 26px;
        color: #c51618;
        float: left;
        line-height: 1;
        width: auto;
    }

    .phone span {
        font-size: 16px;
        font-weight: 600;
    }
	.progress {
        overflow: visible !important;
    }
</style>

@stack('css')