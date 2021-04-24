<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('admin')}}/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <!-- No Extra plugin used -->
    <link href="{{asset('admin')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('admin')}}/assets/css/sleek.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css"
        integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg=="
        crossorigin="anonymous" />

    <!-- FAVICON -->
    <link href="{{asset('admin')}}/assets/img/favicon.png" rel="shortcut icon" />

    <script src="{{asset('admin')}}/assets/plugins/nprogress/nprogress.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link href="{{asset('admin')}}/assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet">
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.header')
            <div class="content-wrapper">
                @yield('content')
            </div>
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;

                </script>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    {{-- <script src="{{asset('admin')}}/assets/plugins/jekyll-search.min.js"></script> --}}
    <script src="{{asset('admin')}}/assets/plugins/charts/Chart.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('.date-range').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('.date-range').on('apply.daterangepicker', function (ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('.date-range').on('cancel.daterangepicker', function (ev, picker) {
                jQuery(this).val('');
            });
        });

    </script>
    <script src="{{asset('admin')}}/assets/plugins/toastr/toastr.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/sleek.bundle.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/data-tables/jquery.datatables.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
    <script src="{{asset('admin')}}/assets/plugins/data-tables/datatables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"
        integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA=="
        crossorigin="anonymous"></script>

    @stack('custom-scripts')
</body>

</html>