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
        $allkategori = Kategori::paginate(8);
        return view('admin.kategori.index', compact('allkategori'));
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
        $validateData = $request->validate(
            [
                'nama_kategori' => 'required|max:20',
            ],
            [
                'name_kategori.required' => 'Nama Kategori wajib diisi.',
                'name_kategori.max' => 'Nama Kategori tidak boleh lebih dari 20 karakter.',
            ]
        );

        Kategori::create($validateData);

        if ($request->input('submit_action') === 'stay') {
            return redirect()->route('kategori.create')->with('success', 'Data berhasil disimpan');
        }

        return redirect()->route('kategori.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('admin.kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        $validateData = $request->validate(
            [
                'nama_kategori' => 'required|max:20',
            ],
            [
                'name_kategori.required' => 'Nama Kategori wajib diisi.',
                'name_kategori.max' => 'Nama Kategori tidak boleh lebih dari 20 karakter.',
            ]
        );

        $kategori->update($validateData);

        if ($request->input('submit_action') === 'stay') {
            return redirect()->route('kategori.create')->with('success', 'Data berhasil disimpan');
        }

        return redirect()->route('kategori.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus!');
    }
}
