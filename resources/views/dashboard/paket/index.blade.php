@extends('dashboard.layouts.main')

@section('content')
    <div class="m-2">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pilihan Paket yang Tersedia</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="mx-2 mb-3">
            <a href="/dashboard/paket/create" class="btn btn-primary">Tambahkan Paket Baru</a>
        </div>

        <div class="row">
            <div class="col-md-11 mx-2">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Price</th>
                            <th scope="col">Jumlah Tamu</th>
                            <th scope="col">Jumlah Foto</th>
                            <th scope="col">Jumlah Vidio</th>
                            <th scope="col">Masa Aktif</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <td>{{ $pakets->category->name }}</td> --}}
                        </tr>
                        @foreach ($pakets as $paket)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $paket->category->name }}</td>
                                <td>Rp{{ $paket->price }}</td>
                                <td>{{ $paket->jumlah_tamu }} orang</td>
                                <td>{{ $paket->jumlah_foto }} pcs</td>
                                <td>{{ $paket->jumlah_vidio }} pcs</td>
                                <td>Tanpa Masa Aktif</td>
                                <td>
                                    <a href="/dashboard/paket/{{ $paket->id }}/edit"
                                        class="btn btn-sm btn-warning">Ubah</a> |
                                    <form action="/dashboard/paket/{{ $paket->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus paket ini?')">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
