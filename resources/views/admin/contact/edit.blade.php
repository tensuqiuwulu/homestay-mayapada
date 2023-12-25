@extends('admin._layouts.app')

@section('title', 'Pramuwisata')

@push('css')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Gambar Villa</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Gambar Villa</li>
                    </ol>
                </nav>
            </div>
        </div>

        <h6 class="mb-0 text-uppercase">Form Gambar Villa</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <!-- Asumsi $image adalah instance dari model Images yang sedang diedit -->
                <form action="{{ route('admin.images.update', $image->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Method Spoofing untuk mengindikasikan ini adalah request UPDATE -->

                    <!-- Judul -->
                    <input class="form-control mb-3" type="text" name="title" placeholder="Title" aria-label="Title" value="{{ $image->title }}">

                    <!-- Order Priority -->
                    <input class="form-control mb-3" type="number" name="in_order" placeholder="Order Priority" aria-label="Order Priority" value="{{ $image->in_order }}">

                    <!-- File Input untuk Gambar (Opsional: Bisa menampilkan gambar saat ini) -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Change Image (optional)</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>

                    <!-- Preview Gambar Saat Ini -->
                    <div>
                        <label>Current Image:</label>

                    </div>

                    <div>
                        <img src="{{ asset($image->file_name) }}" alt="{{ $image->title }}" style="max-height: 100px;">
                    </div>
                    <!-- Submit Button -->
                    <button class="btn btn-primary mt-2" type="submit">Update</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
@endpush