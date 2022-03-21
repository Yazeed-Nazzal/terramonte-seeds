<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dompet.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Sep 2021 09:31:31 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Terramonte" />
    <meta property="og:title" content="Terramonte" />
    <meta property="og:description" content="Terramonte" />
    <meta property="og:image" content="social-image.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <!-- PAGE TITLE HERE -->
    <title>Terramonte Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <link href="{{asset('Admin/assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Admin/assets/vendor/nouislider/nouislider.min.css')}}">
    <!-- Style css -->
    <link href="{{asset('Admin/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">

    @yield('head')



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('layouts.Admin.loading')
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
        Nav header start
        ***********************************-->
    @include('layouts.Admin.navBar')
    <!--**********************************
    Nav header end
    ***********************************-->



        <!--**********************************
        Sidebar start
        ***********************************-->
    @include('layouts.Admin.sideBar')
    <!--**********************************
    Sidebar end
    ***********************************-->




        <!--**********************************
            Content body start
       ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
       ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('Admin/assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('Admin/assets/vendor/apexchart/apexchart.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/wnumb/wNumb.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('Admin/assets/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{asset('Admin/assets/js/custom.min.js')}}"></script>
    <script src="{{asset('Admin/assets/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('Admin/assets/js/demo.js')}}"></script>
    <script src="{{asset('Admin/assets/js/styleSwitcher.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor_about' );
    </script>
    @yield('scripts')

</body>
</html>
