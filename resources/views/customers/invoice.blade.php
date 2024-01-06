<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        table {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h6 class="mb-0 text-uppercase">Detail Booking #</h6>
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
            <td>Check In</td>
            <td>:</td>
            <td>{{ $booking->check_in }}</td>
        </tr>
        <tr>
            <td>Check Out</td>
            <td>:</td>
            <td>{{ $booking->check_in }}</td>
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
</body>

</html>