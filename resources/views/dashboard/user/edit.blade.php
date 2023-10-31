@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Buat Admin Baru</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/user/{{ $user->id }}">
                @method('put')
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Admin" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                        placeholder="admin" value="{{ old('username', $user->username) }}">
                    @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Admin@gmail.com" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Update Password</label>
                    <input type="hidden" name="oldPassword" value="{{ $user->password }}">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Masukkan Password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/dashboard/user" class="btn btn-danger mx-2">Cancel</a>
            </form>
        </div>
    </div>
@endsection
