<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title', 'Latest')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/favicon.png">

    <link rel="stylesheet" href="{{ app_asset('vendors.css') }}">
    <link rel="stylesheet" href="{{ app_asset('app.css') }}">

</head>
<body>
    @include('shared.toast')

    @yield('body')

    <script src="{{ app_asset('manifest.js') }}"></script>
    <script src="{{ app_asset('vendors.js') }}"></script>
    <script src="{{ app_asset('app.js') }}"></script>

    @stack('scripts')
</body>
</html>