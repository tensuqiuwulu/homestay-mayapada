<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brandbook;

class BrandbookController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua gambar
        $brandbook = Brandbook::all();

        // Mengirimkan data gambar ke view
        return view('admin.brandbook.index', compact('brandbook'));
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
        $brandbook = Brandbook::findOrFail($id);

        // Tampilkan view edit dengan data gambar
        return view('admin.brandbook.edit', compact('brandbook'));
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

        $brandbook = Brandbook::findOrFail($id);
        $brandbook->link = $request->link;
        $brandbook->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.brandbook')->with('success', 'Brandbook successfully updated.');
    }
}
