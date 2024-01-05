<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Booking;
use App\Models\Contact;

class LandingController extends Controller
{

    public function index()
    {

        $instagram = Contact::where('type', 'instagram')->first();
        $facebook = Contact::where('type', 'facebook')->first();
        $whatsapp = Contact::where('type', 'whatsapp')->first();
        $email = Contact::where('type', 'email')->first();
        $phone = Contact::where('type', 'phone')->first();

        $bookings = [];

        $images = Images::orderBy('in_order', 'asc')
            ->get();

        if (session('customer')) {
            $bookings = Booking::where('customer_id', session('customer')->id)->get();
        }

        return view('web.index', [
            'images' => $images,
            'bookings' => $bookings,
            'instagram' => $instagram,
            'facebook' => $facebook,
            'whatsapp' => $whatsapp,
            'email' => $email,
            'phone' => $phone,
        ]);
    }
}
