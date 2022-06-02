<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Racht - @yield('title')</title>
        <link rel="stylesheet" href="/admin-page/assets/css/pages/auth.css">

    @stack('prepend-style')
    @include('includes-admin.styles')
    @stack('addon-style')

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            @yield('content')
        </div>

    </div>
    @stack('prepend-script')
    @include('includes-admin.scripts')
    @stack('addon-script')

</body>

</html>
