@include('Frontend.layouts.head')

<body>

<div class="page-wrapper">
    <!-- Preloader -->
{{--    @include('Frontend.layouts.__preloader')--}}
    <!-- Header span -->

    <!-- Main Header-->
    @include('Frontend.layouts.__main_header')
    <!--End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    @include('Frontend.layouts.__main_footer')
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

@include('Frontend.layouts.footer')
