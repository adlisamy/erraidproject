<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erraid</title>


    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">

</head>

<body>
    <div class="wrapper">
        <!-- Top Area -->
        @include('header')
        <!-- End Top Area -->
        <!-- Content Area -->

        @yield('contactform')

        <!-- End Content Area -->
    </div>
    <!-- Footer Area  -->
    @include('footer')
    <!-- End Footer Area -->
    <script src="{{url('/js/app.js')}}"></script>
</body>

</html>