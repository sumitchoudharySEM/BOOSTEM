<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('stack_title_style')
    @include('user.partials.meta')
    {{-- @include('global_links') --}}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <!-- vendor css -->
    <link href="{{ asset('public/dashforge/lib/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashforge/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('public/dashforge/assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dashforge/assets/css/dashforge.dashboard.css') }}">
</head>

<body>
    @include('user/partials/user-navbar')
    @yield('content')
    {{-- @include('partials/footer') --}}
</body>
</html>    