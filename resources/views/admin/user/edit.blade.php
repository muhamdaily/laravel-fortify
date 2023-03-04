@extends('master')
@section('title', 'Ubah Pengguna ' . $user->name)

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Pengguna {{ $user->name }}</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card card-success">
                            <div class="card-body">
                                <form action="{{ route('pengguna.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" value="{{ $user->name }}"
                                            class="form-control @error('name')
                                        is-invalid
                                    @enderror"
                                            autofocus>

                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="email">Alamat Email</label>
                                            <input type="text" id="email" name="email" value="{{ $user->email }}"
                                                class="form-control @error('email')
                                            is-invalid
                                        @enderror">

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="tel" id="phone" name="phone" value="{{ $user->phone }}"
                                                class="form-control @error('phone')
                                            is-invalid
                                        @enderror">

                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="role">Akses Sebagai</label>
                                            <select id="role" name="role" class="form-control selectric">
                                                <option value="" disabled>Pilih Akses Sebagai</option>
                                                <option value="superadmin"
                                                    {{ $user->role == 'superadmin' ? 'selected' : '' }}>superadmin
                                                </option>

                                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>admin
                                                </option>

                                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>user
                                                </option>
                                            </select>

                                            @error('role')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Tentang Saya</label>
                                            <textarea name="bio"
                                                class="form-control summernote-simple @error('bio')
                                            is-invalid
                                        @enderror">
                                        {{ $user->bio }}
                                            </textarea>

                                            @error('bio')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <a href="{{ route('pengguna.index') }}" class="btn btn-dark mr-2">Kembali</a>

                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('customCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.2/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('modules/selectric/public/selectric.css') }}">
@endpush

@push('customJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
    <script src="{{ asset('modules/selectric/public/jquery.selectric.min.js') }}"></script>
@endpush
