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

    public function uploadBuktiBayar(Request $request)
    {
        // Validate the request data
        $request->validate([
            'booking_id' => 'required|exists:bookings,id', // Make sure 'id' exists in the 'bookings' table
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Find the booking by its ID
        $booking = Booking::find($request->booking_id);

        if (!$booking) {
            return response()->json([
                'message' => 'Booking not found'
            ], 404);
        }

        // Handle the file upload
        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Store the uploaded file in the 'public/bukti_bayar' directory
            $file->storeAs('public/bukti_bayar', $fileName);

            // Update the 'bukti_upload' field in the booking
            $booking->bukti_upload = $fileName;
            $booking->save();

            return response()->json([
                'message' => 'Success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'No file uploaded'
            ], 400);
        }
    }

    public function getBuktiBayarByBookingId($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'message' => 'Booking not found'
            ], 404);
        }

        if ($booking->bukti_upload == null) {
            return response()->json([
                'message' => 'Bukti bayar not found'
            ], 404);
        }

        $filePath = 'storage/bukti_bayar/' . $booking->bukti_upload;

        // Return JSON response with success message and file path
        return response()->json([
            'message' => 'Success',
            'path' => asset($filePath) // Use asset() to generate the correct URL
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
