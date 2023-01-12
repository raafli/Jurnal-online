<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/zeta/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2023 06:47:17 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon-icon.png" type="image/x-icon">
    <title>Zeta admin dashboard </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('template/admin/zeta/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/admin/zeta/assets/css/responsive.css') }}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-ball"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layout.header')
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('layout.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Default</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> Dashboard</li>
                    <li class="breadcrumb-item active"> Default</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
            @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Zeta theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('template/admin/zeta/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('template/admin/zeta/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('template/admin/zeta/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('template/admin/zeta/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('template/admin/zeta/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('template/admin/zeta/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/height-equal.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('template/admin/zeta/assets/js/script.js') }}"></script>
    <script src="{{ asset('template/admin/zeta/assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/zeta/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2023 06:48:42 GMT -->
</html>
