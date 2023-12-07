@extends('admin._layouts.app')

@section('title', 'Pramuwisata')

@push('css')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="page-wrapper">
  <div class="page-content">
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

    <h6 class="mb-0 text-uppercase">Data Gambar Villa</h6>
    <hr />

    <div class="card">
      <div class="card-body">
        <div class="col">
          <a href="{{ route('admin.images.create') }}">
            <button type="button" class="btn btn-primary mb-3">Tambah</button>
          </a>
        </div>

        <div class="table-responsive">
          <table id="images-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Aksi</th>
                <th>Judul</th>
                <th>In Order</th>
                <th>Path Gambar</th>
                <!-- Tambahkan atau sesuaikan kolom lain jika diperlukan -->
              </tr>
            </thead>
            <tbody>
              @foreach ($images as $image)
              <tr>
                <td style="width: 100px;">
                  <!-- Tombol edit -->
                  <a href="{{ route('admin.images.edit', $image->id) }}" class="btn btn-primary">Edit</a>
                  <!-- Tombol hapus -->
                  <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                  </form>
                </td>
                <td>{{ $image->title }}</td>
                <td>{{ $image->in_order }}</td>
                <td>
                  <img src="{{ asset($image->file_name) }}" alt="{{ $image->title }}" style="max-height: 100px;">
                </td>
                <!-- Isi data lain sesuai kebutuhan -->
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>

  </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
@endpush