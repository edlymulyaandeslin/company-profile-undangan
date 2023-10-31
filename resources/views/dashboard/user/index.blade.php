@extends('dashboard.layouts.main')

@section('content')
    <div class="m-2">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-2 mb-3">
            <a href="/dashboard/user/create" class="btn btn-primary">Tambahkan Admin Baru</a>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="/dashboard/user/{{ $user->id }}/edit"
                                        class="btn btn-sm btn-warning">Ubah</a> |

                                    <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
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
