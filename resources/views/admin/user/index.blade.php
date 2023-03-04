@extends('master')
@section('title', 'Daftar Pengguna ' . $site->title)

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Daftar Semua Pengguna {{ $site->title }}</h1>
            </div>

            <div class="section-body">
                <div class="card card-success">
                    <div class="card-body">

                        <div class="clearfix mb-3"></div>

                        <table class="table table-striped" id="my-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Profil</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat Email</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img alt="image" src="{{ asset('assets/avatar/' . $user->image) }}"
                                                class="rounded-circle" width="35" data-toggle="tooltip"
                                                title="{{ $user->name }}">
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <span class="badge badge-dark">
                                                {{ $user->email }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($user->email_verified_at != null)
                                                <span class="badge badge-success">
                                                    Terverifikasi
                                                </span>
                                            @else
                                                <span class="badge badge-warning">
                                                    Menunggu
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (auth()->user()->role == 'superadmin')
                                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('pengguna.edit', $user->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="fa-solid fa-user-edit"></i>
                                                    </a>

                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <span class="badge badge-danger">
                                                    <i class="fa-regular fa-circle-xmark"></i> Super Admin
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

@push('customCSS')
    <link rel="stylesheet" href="{{ asset('modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.css">
@endpush

@push('customJS')
    <script src="{{ asset('modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
@endpush
