<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua gambar
        $rooms = Room::all();

        // Mengirimkan data gambar ke view
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room();
        $room->room_number = $request->room_number;

        $room->save();

        return redirect()->route('admin.rooms')->with('success', 'Room successfully created.');
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
        $room = Room::findOrFail($id);

        // Tampilkan view edit dengan data gambar
        return view('admin.room.edit', compact('room'));
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

        $room = Room::findOrFail($id);

        // Perbarui judul dan in_order
        $image->room_number = $request->room_number;
        // Simpan perubahan ke database
        $image->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.room')->with('success', 'Image successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cari gambar berdasarkan ID
        $room = Room::findOrFail($id);

        // Hapus data gambar dari database
        $room->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Room successfully deleted.');
    }
}
