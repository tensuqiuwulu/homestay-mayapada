<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Booking;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function downloadInvoice($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);

        // Generate the PDF using the provided HTML template
        $pdf = PDF::loadView('customers/invoice', compact('booking'));

        // Set the file name for the PDF download
        $fileName = 'invoice_' . $booking->no_booking . '.pdf';

        // Download the PDF file with a custom name
        return $pdf->download($fileName);
    }
}
