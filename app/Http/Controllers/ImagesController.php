<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua gambar
        $images = Images::all();

        // Mengirimkan data gambar ke view
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image',
            'in_order' => 'required',
        ]);

        // Menangani file gambar
        if ($request->hasFile('image')) {
            // Menyimpan file dan mendapatkan path
            $path = $request->file('image')->store('public/images');

            // Membuat instance Images baru
            $image = new Images();
            $image->title = $request->title;
            $image->file_name = Storage::url($path); // Menyimpan URL ke file gambar
            $image->in_order = $request->in_order;

            // Menyimpan ke database
            $image->save();

            // Redirect atau respon lain
            return redirect()->back()->with('success', 'Image successfully uploaded.');
        }

        return back()->withErrors('Failed to upload image.');
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
        $image = Images::findOrFail($id);

        // Tampilkan view edit dengan data gambar
        return view('admin.images.edit', compact('image'));
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
        $request->validate([
            'title' => 'required|string',
            'in_order' => 'required|numeric',
            'image' => 'image|nullable',
        ]);

        $image = Images::findOrFail($id);

        // Perbarui judul dan in_order
        $image->title = $request->title;
        $image->in_order = $request->in_order;

        // Periksa jika ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Menyimpan file dan mendapatkan path
            $path = $request->file('image')->store('public/images');

            // Perbarui path gambar
            $image->file_name = Storage::url($path);
        }

        // Simpan perubahan ke database
        $image->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.images')->with('success', 'Image successfully updated.');
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
        $image = Images::findOrFail($id);

        // Hapus file gambar dari penyimpanan jika ada
        $imagePath = str_replace('/storage', '', $image->file_name); // Mengubah URL menjadi path file
        if (Storage::exists('public' . $imagePath)) {
            Storage::delete('public' . $imagePath);
        }

        // Hapus data gambar dari database
        $image->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Image successfully deleted.');
    }
}
