<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Racht - @yield('title')</title>

    @stack('prepend-style')
    @include('includes-admin.styles')
    @stack('addon-style')

</head>

<body>
    <div id="app">
        {{-- Sidebar --}}
        @include('includes-admin.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('title-section')</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    {{-- Content --}}
                    @yield('content')
                </section>
            </div>
            {{-- Footer --}}
            @include('includes-admin.footer')
        </div>
    </div>
    @stack('prepend-script')
    @include('includes-admin.scripts')
    @stack('addon-script')

</body>

</html>
