<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/icon/' . $site->icon) }}">
    <meta name="title" content="{{ $site->title }}">
    <meta name="author" content="{{ $site->footer }}">
    <meta name="description" content="{{ $site->deskripsi }}">
    <meta name="keywords" content="{{ $site->meta }}">
    <meta property="og:title" content="{{ $site->title }}">
    <meta property="og:description" content="{{ $site->deskripsi }}">
    <meta property="og:image" itemprop="image" content="{{ asset('assets/icon/' . $site->icon) }}">

    @include('component.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('sweetalert::alert')
            <!-- Navbar -->
            @include('component.navbar')
            <!-- End of Navbar -->

            <!-- Sidebar -->
            @include('component.sidebar')
            <!-- End of Sidebar -->

            <!-- Main Content -->
            @yield('content')
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('component.footer')
            <!-- End of Footer -->
        </div>
    </div>

    @include('component.script')
</body>

</html>
