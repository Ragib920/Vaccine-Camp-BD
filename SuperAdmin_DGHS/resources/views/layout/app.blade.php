<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="warper">
        <!-- ============================================== -->
        <!-- Nav bar html starts here -->
        <!-- ============================================== -->
        @include('layout.nav')
        <!-- ============================================== -->
        <!-- sidebar html starts here -->
        <!-- ============================================== -->
        @include('layout.sidebar')
        <!-- ============================================== -->
        <!-- Right panel html starts here -->
        <!-- ============================================== -->

            @yield('content')

        <!-- ============================================== -->
        <!-- Right panel html ends here -->
        <!-- ============================================== -->
    </div>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/canvasjs.min.js') }}"></script>
    @yield('chart')
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
