<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        $request->validate([
            'book_range' => 'required',
            'total_person' => 'required',
        ]);

        $dateParts = explode(" to ", $request->book_range);

        if (count($dateParts) == 2) {
            $startDate = date("Y-m-d", strtotime($dateParts[0]));

            $endDate = date("Y-m-d", strtotime($dateParts[1]));

            $diff = strtotime($endDate) - strtotime($startDate);

            // Menghitung jumlah malam
            $numNights = floor($diff / (60 * 60 * 24));

            // Tarif per malam
            $tarifPerMalam = 200000;

            // Menghitung total biaya
            $totalBiaya = $numNights * $tarifPerMalam;
        }

        // get all room
        $booking = new Booking();

        $rooms = Room::all();
        foreach ($rooms as $room) {
            $exsitBooking = Booking::where('room_id', $room->id)
                ->where('start_date', '<=', $startDate)
                ->where('end_date', '>=', $endDate)
                ->first();
            if ($exsitBooking == null) {
                $booking->room_id = $room->id;
                break;
            }
        }

        if ($booking->room_id == null) {
            return response()->json([
                'message' => 'Kamar tidak tersedia'
            ], 422);
        }

        $booking->customer_id = session('customer')->id;
        $booking->start_date = $startDate;
        $booking->end_date = $endDate;
        $booking->total_price = $totalBiaya;
        $booking->total_person = $request->total_person;
        $booking->status = Booking::STATUS_PENDING;
        $booking->paid_status = Booking::PAID_STATUS_UNPAID;
        $booking->total_night = $numNights;
        $booking->no_booking = rand(100000, 999999);
        $booking->save();

        return response()->json([
            'message' => 'Booking berhasil'
        ], 200);
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
