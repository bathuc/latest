<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/favicon.ico?v=06261350" type="image/x-icon">
        <link rel="icon" href="/favicon.ico?v=06261350" type="image/x-icon">

        <link rel="stylesheet" href="{{ app_asset('vendors.css') }}">
        <link rel="stylesheet" href="{{ app_asset('app.css') }}">

        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container-fluid bg-light" style="height: 100vh">
            <div class="row">
                <div class="col text-center">
                    <div class="code h1 mt-5 pt-5" style="font-size: 5rem">
                        @yield('code')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
