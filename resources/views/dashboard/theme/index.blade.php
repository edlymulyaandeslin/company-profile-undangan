@extends('dashboard.layouts.main')

@section('content')
    <div class="m-2">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tema</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-2 mb-3">
            <a href="/dashboard/theme/create" class="btn btn-primary">Tambahkan Tema Baru</a>
        </div>

        <div class="row">
            <div class="col-md-10 mx-2">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Image</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($themes as $tema)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tema->name }}</td>
                                <td>{{ $tema->category->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $tema->image) }}" width="60px" alt="noImg">
                                </td>
                                <td>
                                    <a href="/dashboard/theme/{{ $tema->id }}/edit"
                                        class="btn btn-sm btn-warning">Ubah</a> |

                                    <form action="/dashboard/theme/{{ $tema->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus tema ini?')">Hapus</button>
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
