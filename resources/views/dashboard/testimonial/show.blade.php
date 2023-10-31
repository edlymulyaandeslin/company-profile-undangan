@extends('dashboard.layouts.main')

@section('content')
    <div class="row mx-4">
        <div class="col-md-12 mt-4">
            <h3>Testimoni by {{ $testimonial->name }}</h3>
        </div>
        <div class="col-md-12 ">
            <a href="/dashboard/testimonial" class="btn btn-sm btn-danger">Back to list</a>
        </div>
        <div class="col-md-12 my-3">
            <img src="{{ asset('storage/' . $testimonial->file) }}" width="50%" class="img-cover rounded" alt="noImg">
        </div>
    </div>
@endsection
