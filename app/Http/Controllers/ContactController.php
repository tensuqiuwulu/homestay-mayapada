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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cari gambar berdasarkan ID, kirim error jika tidak ditemukan
        $contact = Contact::findOrFail($id);

        // Tampilkan view edit dengan data gambar
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi request

        $contact = Contact::findOrFail($id);

        // Perbarui judul dan in_order
        $contact->room_number = $request->contact;
        // Simpan perubahan ke database
        $contact->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.contact')->with('success', 'Contact successfully updated.');
    }

}
