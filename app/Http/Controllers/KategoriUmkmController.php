<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Umkm;
use Illuminate\Http\Request;

class KategoriUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kategoriumkm = Kategori_Umkm::all();
        return view('kategoriumkm.kategoriumkm', compact('list_kategoriumkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoriumkm.form_kategoriumkm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
        ]);
        Kategori_Umkm::create($validated);
        return redirect('admin/kategoriumkm')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori_umkm = Kategori_Umkm::find($id);
        return view('kategoriumkm.detail_kategoriumkm', compact('kategoriumkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_umkm = Kategori_Umkm::find($id);
        return view('kategoriumkm.edit', compact('kategoriumkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
        ]);

        $kategori_umkm = Kategori_Umkm::find($id);
        $kategori_umkm->update($validated);
        return redirect('admin/kategoriumkm')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori_umkm = Kategori_Umkm::find($id);
        $kategori_umkm->delete();return redirect('admin/kategoriumkm')->with('pesan', 'Data Berhasil di Hapus');
    }
}
