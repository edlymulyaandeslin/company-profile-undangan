@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Update Testimoni</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 m-3">
            <form method="post" action="/dashboard/testimonial/{{ $testimonial->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="John doe" value="{{ old('name', $testimonial->name) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="file" class="d-block">Screenshot</label>

                    <input type="hidden" name="oldFile" value="{{ $testimonial->file }}">

                    @if ($testimonial->file)
                        <img src="{{ asset('storage/' . $testimonial->file) }}"
                            class="img-preview img-fluid mb-3 col-sm-4 rounded">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-4 rounded">
                    @endif

                    <input type="file" class="form-control p-1 @error('file') is-invalid @enderror" name="file"
                        id="file" onchange="previewImage()">
                    @error('file')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#file');
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
