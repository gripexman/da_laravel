<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets-two/css/bootstrap.css') }}">
    
<link rel="stylesheet" href="{{ asset('backend/assets-two/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets-two/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets-two/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets-two/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/assets-two/images/favicon.svg" type="image/x-icon') }}">
</head>

<body>
<div id="app">
    <div id="main" class="layout-horizontal">
        @include('admin.partials.header')
        <div class="page-content">
            @yield('content')
        </div>
            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('backend/assets-two/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets-two/js/bootstrap.bundle.min.js') }}"></script>
    
<script src="{{ asset('backend/assets-two/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('backend/assets-two/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('backend/assets-two/js/pages/horizontal-layout.js') }}"></script>
</body>

</html>
