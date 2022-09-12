<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/fonts/boxicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/') }}backend/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('/') }}backend/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    @stack('styles')
    <style>
        label.required::after{
            content: '*';
            color: red;
        }
        .dropify-wrapper .dropify-message .file-icon p {
            font-size: 16px;
        }
    </style>
    <!-- Helpers -->
    <script src="{{ asset('/') }}backend/vendor/js/helpers.js"></script>
    <script src="{{ asset('/') }}backend/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('backend.include.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('backend.include.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('backend.include.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/') }}backend/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('/') }}backend/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('/') }}backend/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('/') }}backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('/') }}backend/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('/') }}backend/js/alert.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('/') }}backend/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('/') }}backend/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @stack('scripts')
</body>

</html>
