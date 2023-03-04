<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/404.css') }}">

    <title>Terjadi kesalahan</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                LARAVEL FORTIFY
            </a>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home">
            <div class="home__container container">
                <div class="home__data">
                    <span class="home__subtitle">404 Halaman Tidak Ditemukan</span>
                    <h1 class="home__title">Terjadi Kesalahan</h1>
                    <p class="home__description">
                        Sepertinya anda tersesat. Silahkan kembali!
                    </p>
                    <a href="javascript:void(0);" class="home__button" onclick="event.preventDefault();history.back();">
                        Kembali
                    </a>
                </div>

                <div class="home__img">
                    <img src="assets/img/ghost.png" alt="">
                    <div class="home__shadow"></div>
                </div>
            </div>

            <footer class="home__footer">
                <span>Hubungi kami</span>
                <span>|</span>
                <span>info@web.anteiku.tech</span>
            </footer>
        </section>
    </main>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('assets/js/scrollreveal404.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/404.js') }}"></script>
</body>

</html>