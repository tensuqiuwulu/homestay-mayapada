<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Review;

class ReviewController extends Controller
{

    function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'review' => 'required',
        ]);

        $review = new Review();
        $review->booking_id = $request->booking_id;
        $review->customer_id = session('customer')->id;
        $review->review = $request->review;
        $review->save();

        $booking = Booking::findOrFail($request->booking_id);
        $booking->is_review = 1;
        $booking->save();

        return response()->json([
            'message' => 'Review success'
        ], 200);
    }
}
