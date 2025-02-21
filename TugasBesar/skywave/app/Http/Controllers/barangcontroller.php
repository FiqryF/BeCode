<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class barangcontroller extends Controller
{
    public function index()
    {
        $barang = barang::all(); // Inisialisasi variabel $layanan
        return view('barang', ['barang' => $barang]);
    }    
    public function tambah()
    {
        return view('tambah');
    }
    public function simpan(Request $request)
    {
        $this->validate($request, [
           'nama_barang' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',    

        ]);

        // Simpan gambar ke dalam folder public/images
        $imagePath = $request->file('gambar')->store('images', 'public');

        // Simpan path gambar ke dalam database
        barang::create([
            'nama_barang' => $request->nama_barang,
            'gambar' => $imagePath, // Menyimpan path gambar yang baru saja diunggah
           'harga' => $request->harga,
           'stok' => $request->stok,
           'deskripsi' => $request->deskripsi,
        ]);

        //var_dump('barang');

        return redirect('/barang');
    }
    public function edit($id)
    {
        $barang  = barang::find($id);
        return view('edit', ['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Field gambar bisa nullable
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $barang = Barang::findOrFail($id);
    
        $barang->nama_barang = $request->nama_barang; // Perbarui barang
        $barang->harga = $request->harga;// Perbarui harga
        $barang->deskripsi = $request->deskripsi;// Perbarui harga
    
        // Update field image jika ada file baru
        if ($request->hasFile('gambar')) {
            if ($barang->gambar) {
                Storage::delete('public/' . $barang->gambar);
            }
    
            $imagePath = $request->file('gambar')->store('public/gambar');
            $barang->gambar = str_replace('public/', '', $imagePath);
        }
    
        // Simpan perubahan
        $barang->save();
    
        return redirect('/barang');
    }
    public function hapus($id)
    {
        $barang = Barang::find($id);

        // Hapus gambar terkait dari penyimpanan jika ada
        if ($barang->image) {
            Storage::delete('public/' . $barang->image);
        }
        // Hapus entri layanan dari basis data
        $barang->delete();
    
        return redirect('/barang');
    }
}
