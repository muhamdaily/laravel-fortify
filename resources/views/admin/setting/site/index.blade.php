@extends('master')
@section('title', 'Pengaturan Email')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengaturan Umum</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-success">
                            <form action="{{ route('umum.upload-image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-8">

                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Pilih Gambar</label>
                                                <input type="file" name="icon" id="image-upload">
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
                                    <button class="btn btn-success">Ubah Icon</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card card-success">
                            <div class="card-body">
                                <form action="{{ route('umum.update', $site->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="title">Judul Website</label>
                                        <input type="text" id="title" name="title" value="{{ $site->title }}"
                                            class="form-control @error('title')
                                            is-invalid
                                            @enderror">

                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="meta">SEO</label>
                                        <input type="text" id="meta" name="meta" value="{{ $site->meta }}"
                                            class="form-control @error('meta')
                                            is-invalid
                                            @enderror">

                                        @error('meta')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="footer">Nama Footer</label>
                                        <input type="text" id="footer" name="footer" value="{{ $site->footer }}"
                                            class="form-control @error('footer')
                                            is-invalid
                                            @enderror">

                                        @error('footer')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi"
                                                class="form-control summernote-simple @error('deskripsi')
                                            is-invalid
                                        @enderror">
                                        {{ $site->deskripsi }}
                                            </textarea>

                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="float-left">
                                            <a href="{{ route('pengaturan') }}" class="btn btn-dark float-start">
                                                <i class="fas fa-arrow-left"></i> Kembali
                                            </a>
                                        </div>

                                        <div class="float-right">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
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
