@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome {{ auth()->user()->name }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="row mx-2">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1">
                    <a href="/dashboard/categories">
                        <i class="fas fa-th-large"></i>
                    </a>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Kategori</span>
                    <span class="info-box-number">
                        {{ count($categories) }}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">

                <span class="info-box-icon bg-success elevation-1">
                    <a href="/dashboard/paket">
                        <i class="fas far fa-list " style="color: #ffffff;"></i>
                    </a>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Paket Pilihan</span>
                    <span class="info-box-number">{{ count($pakets) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-blue elevation-1">
                    <a href="/dashboard/theme">
                        <i class="nav-icon fas fa-solid fa-palette"></i>
                    </a>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Tema</span>
                    <span class="info-box-number">{{ count($theme) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1">
                    <a href="/dashboard/testimonial">
                        <i class="fas fa-users"></i>
                    </a>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Testimoni</span>
                    <span class="info-box-number">{{ count($testimoni) }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1">
                    <a href="/dashboard/testimonial">
                        <i class="fas fa-users"></i>
                    </a>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Admin</span>
                    <span class="info-box-number">{{ count($admin) }}</span>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- /.content -->
@endsection
