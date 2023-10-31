@extends('dashboard.layouts.main')

@section('content')
    <div class="m-2">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Kategori</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="mx-2 mb-3">
            <a href="/dashboard/categories/create" class="btn btn-primary">Tambahkan Kategori Baru</a>
        </div>

        <div class="row">
            <div class="col-md-8 mx-2">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/dashboard/categories/{{ $category->id }}/edit"
                                        class="btn btn-sm btn-warning">Ubah</a> |
                                    <form action="/dashboard/categories/{{ $category->id }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus category ini?')">Hapus</button>
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
