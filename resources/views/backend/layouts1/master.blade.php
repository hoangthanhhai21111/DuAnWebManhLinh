<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mạnh Linh</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('themeAdmin/images/logo/logo.png') }}" rel="icon">
    <link href="{{ asset('themeAdmin/images/logo/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('AdminLayouts/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminLayouts/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('AdminLayouts/assets/css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>



    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('backend.layouts1.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('backend.layouts1.sidebar')
    <!-- End Sidebar-->

    <!-- End #main -->
    {{-- @include('backend.layouts1.table') --}}
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('AdminLayouts/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('AdminLayouts/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('AdminLayouts/assets/js/main.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            if ($('#blah').hide()) {
                $('#blah').hide();
            }
            jQuery('#inputFile').change(function() {
                $('#blah').show();
                const file = jQuery(this)[0].files;
                if (file[0]) {
                    jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
                    jQuery('#blah1').attr('src', URL.createObjectURL(file[0]));
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
