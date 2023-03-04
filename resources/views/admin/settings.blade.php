@extends('master')
@section('title', 'Akun Saya')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengaturan Kata Sandi</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card card-success">
                            <div class="card-body">

                                <form action="{{ route('user-password.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="current_password">Kata Sandi Saat Ini</label>
                                        <input type="password"
                                            class="form-control @error('current_password', 'updatePassword')
                                                is-invalid
                                            @enderror"
                                            name="current_password" id="current_password" tabindex="1">

                                        @error('current_password', 'updatePassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="password"><span class="text-danger">*</span> Kata Sandi Baru</label>
                                            <input type="password"
                                                class="form-control @error('password', 'updatePassword')
                                                    is-invalid
                                                @enderror"
                                                name="password" id="password" tabindex="2">

                                            @error('password', 'updatePassword')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="password_confirmation"><span class="text-danger">*</span> Kata Sandi
                                                Baru</label>
                                            <input type="password"
                                                class="form-control @error('password_confirmation', 'updatePassword')
                                                    is-invalid
                                                @enderror"
                                                name="password_confirmation" id="password_confirmation" tabindex="3">
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
