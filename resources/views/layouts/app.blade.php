<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    {!! SEO::generate() !!}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('alt-assets/img/logo.jpeg') }}">

    <!-- Styles -->
    @stack('prepend-style')
    @include('includes.frontend.style')
    @stack('addon-style')
    @livewireStyles

</head>

<body style="background: #f3f2f3;">
    @livewireScripts
    @include('sweetalert::alert')

    @include('includes.frontend.navbar')
    @yield('content')
    @include('includes.frontend.footer')

    @stack('prepend-script')
    @include('includes.frontend.script')
    @stack('addon-script')

</body>

</html>
