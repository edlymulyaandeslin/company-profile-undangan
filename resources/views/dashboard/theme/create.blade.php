@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Buat Tema Baru</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/theme" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Tema</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Undangan Khitan" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="category_id">
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control p-1 @error('image') is-invalid @enderror" name="image"
                        value="{{ old('image') }}">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="link">Link</label>
                    <input type="text" class="form-control p-1 @error('link') is-invalid @enderror" name="link"
                        placeholder="https://" value="{{ old('link') }}">
                    @error('link')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                <a href="/dashboard/theme" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
@endsection
