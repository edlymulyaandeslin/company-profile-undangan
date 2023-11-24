@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Update Tema</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/theme/{{ $theme->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Tema</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Undangan Khitan" value="{{ old('name', $theme->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="category_id">
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            @if (old('category_id', $theme->category->id) == $category->id)
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
                    <label for="gambar" class="d-block">Gambar</label>

                    <input type="hidden" name="oldImage" value="{{ $theme->image }}">

                    @if ($theme->image)
                        <img src="{{ asset('storage/' . $theme->image) }}" class="img-preview img-fluid mb-3 col-sm-4 ">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-4">
                    @endif

                    <input type="file" class="form-control p-1 @error('image') is-invalid @enderror" name="image"
                        id="image" value="{{ old('image') }}" onchange="previewImage()">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="link">Link</label>
                    <input type="text" class="form-control p-1 @error('link') is-invalid @enderror" name="link"
                        placeholder="https://" value="{{ old('link', $theme->link) }}">
                    @error('link')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Konfirmasi Update</button>
                <a href="/dashboard/theme" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
