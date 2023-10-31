@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Buat Kategori Baru</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/categories">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
@endsection
