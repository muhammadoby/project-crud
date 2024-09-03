<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG'"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    @stack('styles')
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>Steak House | {{ !empty($title) ? $title : 'Home' }}</title>

    @livewireStyles
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        @livewire('layout.navbar')
        <!-- Sidebar -->
        @include('layouts.navigation')

        @yield('content')
    </main>

    <!-- Scripts -->
    @livewireScripts
    @include('sweetalert::alert')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    @stack('scripts')
</body>

</html>
