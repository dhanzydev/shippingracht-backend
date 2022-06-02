<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Recht</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    <!-- Navbar -->
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @stack('prepend-scripts')
        @include('includes.scripts')
    @stack('addon-script')
</body>

</html>