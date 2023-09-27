<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {
        return view('kategori.index');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
            'deskripsi_kategori' => 'required|min:3|max:255',
            'status_kategori' => 'required',
        ]);

        DB::beginTransaction();
        try {
            //upload gambar
            if ($request->hasFile('gambar_kategori')) {
                $file = $request->file('gambar_kategori');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/kategori', $filename);
            } else {
                $filename = 'default.jpg';
            }
            $kategori = new Kategori;
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->slug_kategori = Str::slug($request->nama_kategori);
            $kategori->deskripsi_kategori = $request->deskripsi_kategori;
            $kategori->status_kategori = $request->status_kategori;
            $kategori->gambar_kategori = $filename;
            $kategori->save();

            DB::commit();
            return redirect()->route('kategori.index')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            // hilangkan file yang sudah terupload
            if ($request->hasFile('gambar_kategori')) {
                Storage::delete('public/kategori/' . $filename);
            }
            DB::rollback();
            return redirect()->route('kategori.index')->with('error', 'Data gagal disimpan');
        }
    }

    public function edit($id) {
        $data['kategori'] = Kategori::findOrFail($id);
        return view('kategori.edit', $data);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
            'deskripsi_kategori' => 'required|min:3|max:255',
            'status_kategori' => 'required',
        ]);

        DB::beginTransaction();
        try {
            //upload gambar
            if ($request->hasFile('gambar_kategori')) {
                $file = $request->file('gambar_kategori');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/kategori', $filename);
            } else {
                $filename = $request->gambar_kategori_lama;
            }
            $kategori = Kategori::findOrFail($id);
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->slug_kategori = Str::slug($request->nama_kategori);
            $kategori->deskripsi_kategori = $request->deskripsi_kategori;
            $kategori->status_kategori = $request->status_kategori;
            $kategori->gambar_kategori = $filename;
            $kategori->save();

            DB::commit();
            return redirect()->route('kategori.index')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            // hilangkan file yang sudah terupload
            if ($request->hasFile('gambar_kategori')) {
                Storage::delete('public/kategori/' . $filename);
            }
            DB::rollback();
            return redirect()->route('kategori.index')->with('error', 'Data gagal disimpan');
        }
    }

    public function destroy($id) {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus');
    }
}
