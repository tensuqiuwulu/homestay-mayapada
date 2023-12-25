<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ManageBookingController extends Controller
{
    public function index()
    {
        // Mengambil semua gambar
        $booking = Booking::all();

        // Mengirimkan data gambar ke view
        return view('admin.booking.index', compact('booking'));
    }
}
