<!DOCTYPE html>
<html lang="en">


<!-- site icon -->
<link rel="icon" href="{{ asset('themeAdmin/images/fevicon.png') }}" type="image/png" />
<script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>

<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/bootstrap.min.css') }}" />
<!-- site css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/responsive.css') }}" />
<!-- color css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/colors.css') }}" />
<!-- select bootstrap -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/bootstrap-select.css') }}" />
<!-- scrollbar css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/perfect-scrollbar.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/custom.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


<!--[if lt IE 9]>-->

<head>
    <!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Mạnh Linh</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- site icon -->
<link rel="icon" href="{{ asset('themeAdmin/images/fevicon.png') }}" type="image/png" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/bootstrap.min.css') }}" />
<!-- site css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/responsive.css') }}" />
<!-- color css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/colors.css') }}" />
<!-- select bootstrap -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/bootstrap-select.css') }}" />
<!-- scrollbar css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/perfect-scrollbar.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('themeAdmin/css/custom.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">

            <body class="dashboard dashboard_1">
                <div class="full_container">
                    <div class="inner_container">
                        <!-- Sidebar  -->
                        @include('backend.layouts.sidebar')
                        <!-- end sidebar -->
                        <!-- right content -->
                        <div id="content">
                            <!-- topbar -->
                            @include('backend.layouts.header')
                            <!-- end topbar -->
                            <!-- dashboard inner -->
                            @yield('content')
                            {{-- @include('backend.layouts.content') --}}
                            {{-- @include('backend.layouts.TABLE') --}}
                            <!-- end dashboard inner -->
                        </div>
                    </div>
                </div>
                <!-- jQuery -->
                <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
                    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
                </script>
                <script src="{{ asset('themeAdmin/js/jquery.min.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/popper.min.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/bootstrap.min.js') }}"></script>
                <!-- wow animation -->
                <script src="{{ asset('themeAdmin/js/animate.js') }}"></script>
                <!-- select country -->
                <script src="{{ asset('themeAdmin/js/bootstrap-select.js') }}"></script>
                <!-- owl carousel -->
                <script src="{{ asset('themeAdmin/js/owl.carousel.js') }}"></script>
                <!-- chart js -->
                <script src="{{ asset('themeAdmin/js/Chart.min.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/Chart.bundle.min.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/utils.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/analyser.js') }}"></script>
                <!-- nice scrollbar -->
                <script src="{{ asset('themeAdmin/js/perfect-scrollbar.min.js') }}"></script>
                <script>
                    var ps = new PerfectScrollbar('#sidebar');
                </script>
                <!-- custom js -->
                <script src="{{ asset('themeAdmin/js/custom.js') }}"></script>
                <script src="{{ asset('themeAdmin/js/chart_custom_style1.js') }}"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script> --}}
                <script src="{{ asset('AdminTheme/ckeditor/ckeditor.js') }}"></script> <!-- END THEME JS -->
                <script src="{{ asset('assets/js/uploadFile.js') }}"></script>
                <script>
                    CKEDITOR.replace('ckeditor');
                    CKEDITOR.replace('ckeditor1');
                </script>

                <script>
                    @if (Session::has('message'))
                        var type = "{{ Session::get('alert-type', 'info') }}"
                        switch (type) {
                            case 'info':
                                toastr.info(" {{ Session::get('message') }} ");
                                break;
                            case 'success':
                                toastr.success(" {{ Session::get('message') }} ");
                                break;
                            case 'warning':
                                toastr.warning(" {{ Session::get('message') }} ");
                                break;
                            case 'error':
                                toastr.error(" {{ Session::get('message') }} ");
                                break;
                        }
                    @endif
                </script>
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
