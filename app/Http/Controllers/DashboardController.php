<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBookingPending = Booking::where('status', Booking::STATUS_PENDING)->count();
        $totalBookingCheckin = Booking::where('status', Booking::STATUS_CHECKIN)->count();
        $totalBookingCheckout = Booking::where('status', Booking::STATUS_CHECKOUT)->count();
        $totalBookingCancel = Booking::where('status', Booking::STATUS_CANCEL)->count();
        $totalCustomer = Customer::count();
        $totalReview = Review::count();


        return view(
            'admin.dashboard.index',
            compact(
                'totalBookingPending',
                'totalBookingCheckin',
                'totalBookingCheckout',
                'totalBookingCancel',
                'totalCustomer',
                'totalReview'
            )
        );
    }
}
