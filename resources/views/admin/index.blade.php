@extends('master')
@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Selamat Datang, {{ auth()->user()->name }}</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image" src="{{ asset('assets/avatar/' . auth()->user()->image) }}"
                                            class="rounded-circle profile-widget-picture" style="aspect-ratio: 1/1;">
                                        <div class="profile-widget-items">
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Pengikut
                                                </div>
                                                <div class="profile-widget-item-value">10K
                                                </div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Mengikuti</div>
                                                <div class="profile-widget-item-value">
                                                    2
                                                </div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Status</div>
                                                <div class="profile-widget-item-value">
                                                    {{ auth()->user()->role }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-widget-description">
                                        <div class="profile-widget-name">{{ auth()->user()->name }} <div
                                                class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div> {{ auth()->user()->phone }}
                                            </div>
                                        </div>
                                        <p class="font-weight-bold">Tentang Saya</p>
                                        {!! auth()->user()->bio !!}
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="font-weight-bold mb-2">Ikuti {{ auth()->user()->name }}</div>
                                        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-github mr-1">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>
@endsection

@push('customCSS')
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/summernote/dist/summernote-bs4.css') }}">
@endpush

@push('customJS')
    <script src="{{ asset('modules/summernote/dist/summernote-bs4.js') }}"></script>
@endpush
