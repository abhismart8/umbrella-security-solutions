
	
<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>

        <!--begin::Head-->
        @include('partials.head')
        <!--end::Head-->

    </head>
    <body>

        <!--begin::Header-->
        @include('partials.header')
        <!--end::Header-->

        <!--begin::Section-->
        @yield('content')	
        <!--end::Section-->

        <!--begin::Footer-->
        @include('partials.footer')
        <!--end::Footer-->

        <!--begin::Footer Scripts-->
        @include('partials.footer-scripts')
        <!--end::Footer Scripts-->

	</body>
</html>
