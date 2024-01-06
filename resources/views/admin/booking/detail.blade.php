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
            <div class="breadcrumb-title pe-3">Detail Booking</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Booking</li>
                    </ol>
                </nav>
            </div>
        </div>

        <h6 class="mb-0 text-uppercase">Detail Booking #</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <table>
                    <tr>
                        <td>No Booking</td>
                        <td>:</td>
                        <td>{{ $booking->no_booking }}</td>
                    </tr>
                    <tr>
                        <td>Customer</td>
                        <td>:</td>
                        <td>{{ $booking->customer->name }}</td>
                    </tr>
                    <tr>
                        <td>Book Start</td>
                        <td>:</td>
                        <td>{{ $booking->start_date }}</td>
                    </tr>
                    <tr>
                        <td>Book End</td>
                        <td>:</td>
                        <td>{{ $booking->end_date }}</td>
                    </tr>
                    <tr>
                        <td>Status Booking</td>
                        <td>:</td>
                        <td>
                            @if ($booking->status == 0)
                            <span class="badge bg-warning text-dark">Pending</span>
                            @elseif ($booking->status == 1)
                            <span class="badge bg-info text-dark">Check In</span>
                            @elseif ($booking->status == 2)
                            <span class="badge bg-success text-dark">Check Out</span>
                            @elseif ($booking->status == 3)
                            <span class="badge bg-danger text-dark">Cancel</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Status Paid</td>
                        <td>:</td>
                        <td>
                            @if ($booking->paid_status == 0)
                            <span class="badge bg-warning text-dark">Pending</span>
                            @elseif ($booking->paid_status == 1)
                            <span class="badge bg-success text-dark">Paid</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>:</td>
                        <td> Rp. {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                    </tr>
                </table>

                <hr />
                <!-- add button paid, checkin, checkout and cancel -->

                @if ($booking->paid_status == 0)
                <form action="{{ route('admin.booking.update-paid-status', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" name="paid_status" value="1" class="btn btn-success">Paid</button>
                    <button type="submit" name="status" value="3" class="btn btn-danger">Cancel</button>
                </form>
                @elseif ($booking->paid_status == 1)

                @if ($booking->status == 0)
                <form action="{{ route('admin.booking.update-status', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" name="status" value="1" class="btn btn-primary">Check In</button>
                    <button type="submit" name="status" value="3" class="btn btn-danger">Cancel</button>
                </form>
                @elseif ($booking->status == 1)
                <form action="{{ route('admin.booking.update-status', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" name="status" value="2" class="btn btn-success">Check Out</button>
                    <button type="submit" name="status" value="3" class="btn btn-danger">Cancel</button>
                </form>
                @endif
                @endif


            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
@endpush