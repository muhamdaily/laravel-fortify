@extends('master')
@section('title', 'Akun Saya')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Informasi Akun {{ auth()->user()->name }}</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-success">
                            <form action="{{ route('pengguna.image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-8">

                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Pilih Gambar</label>
                                                <input type="file" name="image" id="image-upload">
                                            </div>

                                            <small class="form-text text-muted">
                                                <span class="text-danger">*</span> Maksimal unggah 5 MB
                                            </small>
                                            <small class="form-text text-muted">
                                                <span class="text-danger">*</span> Hanya jpg, jpeg, png
                                            </small>
                                            <small class="form-text text-muted">
                                                <span class="text-danger">*</span> Maksimal ukuran 512x512
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-success">Ganti Foto Profil</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card card-success">
                            <div class="card-body">
                                <form action="{{ route('user-profile-information.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ auth()->user()->name }}"
                                            class="form-control @error('name', 'updateProfileInformation')
                                        is-invalid
                                    @enderror"
                                            autofocus>

                                        @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Alamat Email</label>
                                            <input type="text" id="email" name="email"
                                                value="{{ auth()->user()->email }}"
                                                class="form-control @error('email', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">

                                            @error('email', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="tel" id="phone" name="phone"
                                                value="{{ auth()->user()->phone }}"
                                                class="form-control @error('phone', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">

                                            @error('phone', 'updateProfileInformation')
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
                                                class="form-control summernote-simple @error('bio', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">
                                        {{ auth()->user()->bio }}
                                            </textarea>

                                            @error('bio', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
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
    <link rel="stylesheet" href="{{ asset('assets/css/croppie.css') }}">
@endpush

@push('customJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
    <script src="{{ asset('modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('assets/js/croppie.js') }}"></script>
    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Pilih Gambar", // Default: Choose File
            label_selected: "Ubah Gambar", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endpush
