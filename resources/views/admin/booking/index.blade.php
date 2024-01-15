@extends('admin._layouts.app')

@section('title', 'Pramuwisata')

@push('css')
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Manage Booking</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Booking</li>
                    </ol>
                </nav>
            </div>
        </div>

        <h6 class="mb-0 text-uppercase">Data Booking</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="images-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>No Booking</th>
                                <th>Customer</th>
                                <th>Room</th>
                                <th>Book Start</th>
                                <th>Book End</th>
                                <th>Status Booking</th>
                                <th>Status Paid</th>
                                <th>Price</th>
                                <!-- Tambahkan atau sesuaikan kolom lain jika diperlukan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.booking.detail', $booking->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                    </a>
                                </td>
                                <td>{{ $booking->no_booking }}</td>
                                <td>{{ $booking->customer->name }}</td>
                                <td>{{ $booking->rooms->room_number }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td>
                                    @if ($booking->status == 0)
                                    <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif ($booking->status == 1)
                                    <span class="badge bg-primary">Check In</span>
                                    @elseif ($booking->status == 2)
                                    <span class="badge bg-success">Check Out</span>
                                    @elseif ($booking->status == 3)
                                    <span class="badge bg-danger">Cancel</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($booking->paid_status == 0)
                                    <span class="badge bg-warning text-dark">Unpaid</span>
                                    @elseif ($booking->paid_status == 1)
                                    <span class="badge bg-success">Paid</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- price indo format -->
                                    Rp. {{ number_format($booking->total_price, 0, ',', '.') }}
                                </td>
                                <!-- Tambahkan atau sesuaikan kolom lain jika diperlukan -->
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