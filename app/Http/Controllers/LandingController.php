<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Services\GoogleService;
use App\Models\Booking;


class LandingController extends Controller
{

    public function __construct(
        protected GoogleService $googleService
    ) {
    }

    public function index()
    {

        $bookings = [];

        $data = $this->googleService->getReviews();
        // dd($data);

        $images = Images::orderBy('in_order', 'asc')
            ->get();

        if (session('customer')) {
            $bookings = Booking::where('customer_id', session('customer')->id)->get();
        }

        return view('web.index', compact('images', 'data', 'bookings'));
    }
}
