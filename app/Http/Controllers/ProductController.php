<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Container\Attributes;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allproduct = Product::paginate(8);
        return view('admin.product.index', compact('allproduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        return view('admin.product.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama_product' => 'required|string|max:50',
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'harga' => 'required|numeric|between:0,999999.99',
            'stok' => 'required|integer|max:99',
            'deskripsi' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ], [
            'nama_product.required' => 'Nama produk wajib diisi.',
            'nama_product.max' => 'Nama produk maksimal 50 karakter.',

            'kategori_id.required' => 'Kategori wajib dipilih.',
            'kategori_id.integer' => 'Kategori tidak valid.',
            'kategori_id.exists' => 'Kategori tidak ditemukan.',

            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.between' => 'Harga harus antara 0 hingga 999999.99.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.max' => 'Stok maksimal 99.',

            'deskripsi.required' => 'Deskripsi produk wajib diisi.',
            'deskripsi.max' => 'Deskripsi maksimal 1000 karakter.',

            'image.required' => 'Gambar produk wajib diunggah.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        $image = $request->file('image');
        $image->storeAs('image', $image->hashName());
        $validateData['image'] = $image->hashName();

        Product::create($validateData);

        if ($request->input('submit_action') === 'stay') {
            return redirect()->route('product.create')->with('success', 'Data berhasil disimpan');
        }

        return redirect()->route('product.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $kategori = Kategori::all();
        return view('admin.product.edit',compact('product','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $validateData = $request->validate([
            'nama_product' => 'required|string|max:50',
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'harga' => 'required|numeric|between:0,999999.99',
            'stok' => 'required|integer|max:99',
            'deskripsi' => 'required|string|max:1000',
            'image' => 'image|mimes:jpg,jpeg,png',
        ], [
            'nama_product.required' => 'Nama produk wajib diisi.',
            'nama_product.max' => 'Nama produk maksimal 50 karakter.',

            'kategori_id.required' => 'Kategori wajib dipilih.',
            'kategori_id.integer' => 'Kategori tidak valid.',
            'kategori_id.exists' => 'Kategori tidak ditemukan.',

            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.between' => 'Harga harus antara 0 hingga 999999.99.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.max' => 'Stok maksimal 99.',

            'deskripsi.required' => 'Deskripsi produk wajib diisi.',
            'deskripsi.max' => 'Deskripsi maksimal 1000 karakter.',
        ]);

        if ($request->file('image')) {

            Storage::delete('image/' . $product->image);

            $image = $request->file('image');
            $image->storeAs('image', $image->hashName(), 'public');

            $validateData['image'] = $image->hashName();

        }

        $product->update($validateData);

        if ($request->input('submit_action') === 'stay') {
            return redirect()->route('product.create')->with('success', 'Data berhasil disimpan');
        }

        return redirect()->route('product.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Data berhasil dihapus!');
    }
}
