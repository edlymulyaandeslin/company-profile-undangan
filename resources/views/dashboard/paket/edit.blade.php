@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Update Paket</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/paket/{{ $pakets->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="category_id">
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            @if (old('category_id', $pakets->category_id) == $category->id)
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
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                        placeholder="Rp. 10000" value="{{ old('price', $pakets->price) }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                    <input type="number" class="form-control @error('jumlah_tamu') is-invalid @enderror" name="jumlah_tamu"
                        placeholder="100 Orang" value="{{ old('jumlah_tamu', $pakets->jumlah_tamu) }}">
                    @error('jumlah_tamu')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_foto" class="form-label">Jumlah Foto</label>
                    <input type="number" class="form-control @error('jumlah_foto') is-invalid @enderror" name="jumlah_foto"
                        placeholder="100 pcs" value="{{ old('jumlah_foto', $pakets->jumlah_foto) }}">
                    @error('jumlah_foto')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_vidio" class="form-label">Jumlah Vidio</label>
                    <input type="number" class="form-control @error('jumlah_vidio') is-invalid @enderror"
                        name="jumlah_vidio" placeholder="100 pcs" value="{{ old('jumlah_vidio', $pakets->jumlah_vidio) }}">
                    @error('jumlah_vidio')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="masa_aktif" class="form-label">Masa Aktif</label>
                    <input type="number" class="form-control @error('masa_aktif') is-invalid @enderror" name="masa_aktif"
                        placeholder="/Hari" value="{{ old('masa_aktif', $pakets->masa_aktif) }}">
                    @error('masa_aktif')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection
