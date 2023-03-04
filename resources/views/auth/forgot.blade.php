<!DOCTYPE html>
<html>

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

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/icon/' . $site->icon) }}" alt="logo" width="100"
                                class="shadow-dark rounded-circle">
                        </div>

                        <div class="card card-success">
                            <div class="card-header justify-content-center">
                                <h4 class="text-success font-weight-normal">
                                    <span class="font-weight-bold">Lupa Kata Sandi
                                    </span>
                                </h4>
                            </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <p class="text-muted">
                                        <strong class="text-success">Terkirim!</strong> Kami telah mengirimkan tautan
                                        untuk mengatur ulang kata sandi
                                        ke alamat email Anda. Silahkan cek folder <strong>
                                            Spam
                                        </strong>, jika Anda tidak
                                        melihat email dari kami!
                                    </p>
                                @else
                                    <p class="text-muted">Masukkan alamat email yang terdaftar dan kami akan mengirimkan
                                        tautan untuk mengatur ulang kata sandi</p>
                                @endif

                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"><span class="text-danger">*</span> Alamat Email</label>
                                        <input id="email" type="text"
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
                                        <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="2">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>

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
