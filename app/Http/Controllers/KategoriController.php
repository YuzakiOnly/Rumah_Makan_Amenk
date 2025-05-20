<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Validation\Rules\DatabaseRule;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allKategori = Kategori::all();
        return view('admin.kategori.index',compact('allKategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:100',
        ]);

        //simpan data
        Kategori::create($validatedData);

        //redirect index kategori
        return redirect()->route('admin.kategori.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('admin.kategori.edit' , compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:100',
        ]);

        //update data
        $kategori->update($validatedData);

        //redirect index kategori
        return redirect()->route('admin.kategori.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
        $kategori->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
