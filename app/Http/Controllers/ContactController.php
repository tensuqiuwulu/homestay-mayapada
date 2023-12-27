<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua gambar
        $contacts = Contact::all();

        // Mengirimkan data gambar ke view
        return view('admin.contact.index', compact('contacts'));
    }

}
