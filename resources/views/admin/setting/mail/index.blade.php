@extends('master')
@section('title', 'Pengaturan Email')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengaturan Email</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card card-success">
                            <div class="card-body">

                                <a href="{{ route('mail.test') }}" class="btn btn-sm btn-danger mb-2">Tes Konfigurasi</a>

                                <form action="{{ route('mail.update', $mail->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mail_username">Username</label>
                                                <input type="text" id="mail_username" name="mail_username"
                                                    value="{{ $mail->mail_username }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mail_password">Password</label>
                                                <input type="text" id="mail_password" name="mail_password"
                                                    value="{{ $mail->mail_password }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mail_transport">Mail Transport</label>
                                                <input type="text" id="mail_transport" name="mail_transport"
                                                    value="{{ $mail->mail_transport }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mail_host">Mail Host</label>
                                                <input type="text" id="mail_host" name="mail_host"
                                                    value="{{ $mail->mail_host }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mail_port">Mail Port</label>
                                                <input type="text" id="mail_port" name="mail_port"
                                                    value="{{ $mail->mail_port }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mail_encryption">Encryption</label>
                                                <input type="text" id="mail_encryption" name="mail_encryption"
                                                    value="{{ $mail->mail_encryption }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mail_address">Alamat Email</label>
                                                <input type="text" id="mail_address" name="mail_address"
                                                    value="{{ $mail->mail_address }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mail_name">Pengirim</label>
                                                <input type="text" id="mail_name" name="mail_name"
                                                    value="{{ $mail->mail_name }}" class="form-control">
                                            </div>
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
                            </div>
                            </form>

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
@endpush

@push('customJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
@endpush
