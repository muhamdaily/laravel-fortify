@extends('master')
@section('title', 'Pengaturan Website')

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Pengaturan Website</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4>Konfigurasi Email</h4>
                                <p>Pengaturan SMTP email, notifikasi, dan lainnya yang terkait dengan email.</p>
                                <a href="{{ route('mail.index') }}" class="card-cta">Ubah Pengaturan
                                    <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="card-body">
                                <h4>Pengaturan Umum</h4>
                                <p>Pengaturan kostumisasi website mulai dari title, SEO, Footer dan masih banyak lagi.</p>
                                <a href="{{ route('umum.index') }}" class="card-cta">Ubah Pengaturan <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
