<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Services\GoogleService;
use SKAgarwal\GoogleApi\PlacesApi;

class LandingController extends Controller
{

    public function __construct(
        protected GoogleService $googleService
    ) {
    }

    public function index()
    {
        $data = $this->googleService->getReviews();
        // dd($data);

        $images = Images::orderBy('in_order', 'asc')
            ->get();

        return view('web.index', compact('images', 'data'));
    }
}
