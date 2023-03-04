<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $site->title }}</title>
    <link rel="icon" href="{{ asset('assets/icon/' . $site->icon) }}">
    <meta name="title" content="{{ $site->title }}">
    <meta name="author" content="{{ $site->footer }}">
    <meta name="description" content="{{ $site->deskripsi }}">
    <meta name="keywords" content="{{ $site->meta }}">
    <meta property="og:title" content="{{ $site->title }}">
    <meta property="og:description" content="{{ $site->deskripsi }}">
    <meta property="og:image" itemprop="image" content="{{ asset('assets/icon/' . $site->icon) }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="{{ asset('assets/icon/' . $site->icon) }}" alt="logo" width="80"
                            class="shadow-dark rounded-circle mb-5 mt-2">
                        <h4 class="text-success font-weight-normal">
                            <span class="font-weight-bold">{{ $site->title }}
                            </span>
                        </h4>
                        <p class="text-muted">{{ $site->deskripsi }}
                        </p>

                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    value="{{ old('email') }}" name="email" tabindex="1" autofocus>


                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Kata Sandi</label>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password')
                                is-invalid
                            @enderror"
                                    name="password" tabindex="2">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <a href="{{ route('password.request') }}" class="float-left mt-3">
                                    Lupa kata sandi?
                                </a>
                                <button type="submit" class="btn btn-success btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Masuk
                                </button>
                            </div>

                            <div class="mt-5 text-center">
                                Belum memiliki akun? <a href="{{ route('register') }}">Daftar disini</a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="{{ asset('assets/img/unsplash/bg.png') }}">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Laravel Fortify</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Muhammad Maghribi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
</body>

</html>
