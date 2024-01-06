<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ManageBookingController extends Controller
{
    public function index()
    {
        // Mengambil semua gambar
        $bookings = Booking::all();

        // Mengirimkan data gambar ke view
        return view(
            'admin.booking.index',
            compact('bookings')
        );
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view(
            'admin.booking.detail',
            compact('booking')
        );
    }

    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = $request->status;
        if ($request->status == 1) {
            $booking->check_in = date('Y-m-d H:i:s');
        } else if ($request->status == 2) {
            $booking->check_out = date('Y-m-d H:i:s');
        }
        $booking->save();

        return redirect()->route('admin.booking.detail', $id)->with('success', 'Booking successfully updated.');
    }

    public function updatePaidStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->paid_status = $request->paid_status;
        $booking->save();

        return redirect()->route('admin.booking.detail', $id)->with('success', 'Booking successfully updated.');
    }
}
