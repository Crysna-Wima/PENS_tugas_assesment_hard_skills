<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product.index');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_product' => 'required|min:3|max:255',
            'deskripsi_product' => 'required|min:3|max:255',
            'status_product' => 'required',
        ]);

        DB::beginTransaction();
        try {
            //upload gambar
            if ($request->hasFile('gambar_product')) {
                $file = $request->file('gambar_product');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/product', $filename);
            } else {
                $filename = 'default.jpg';
            }
            $product = new Product;
            $product->nama_product = $request->nama_product;
            $product->slug_product = Str::slug($request->nama_product);
            $product->deskripsi_product = $request->deskripsi_product;
            $product->status_product = $request->status_product;
            $product->gambar_product = $filename;
            $product->save();

            DB::commit();
            return redirect()->route('product.index')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            // hilangkan file yang sudah terupload
            if ($request->hasFile('gambar_product')) {
                Storage::delete('public/product/' . $filename);
            }
            DB::rollback();
            return redirect()->route('product.index')->with('error', 'Data gagal disimpan');
        }
    }

    public function edit($id) {
        $data['product'] = Product::findOrFail($id);
        return view('product.edit', $data);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nama_product' => 'required|min:3|max:255',
            'deskripsi_product' => 'required|min:3|max:255',
            'status_product' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            //upload gambar
            if ($request->hasFile('gambar_product')) {
                $file = $request->file('gambar_product');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/product', $filename);
                // hilangkan file yang sudah terupload
                Storage::delete('public/product/' . $product->gambar_product);
            } else {
                $filename = $product->gambar_product;
            }
            $product->nama_product = $request->nama_product;
            $product->slug_product = Str::slug($request->nama_product);
            $product->deskripsi_product = $request->deskripsi_product;
            $product->status_product = $request->status_product;
            $product->gambar_product = $filename;
            $product->save();

            DB::commit();
            return redirect()->route('product.index')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            // hilangkan file yang sudah terupload
            if ($request->hasFile('gambar_product')) {
                Storage::delete('public/product/' . $filename);
            }
            DB::rollback();
            return redirect()->route('product.index')->with('error', 'Data gagal disimpan');
        }
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        Storage::delete('public/product/' . $product->gambar_product);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Data berhasil dihapus');
    }
}
