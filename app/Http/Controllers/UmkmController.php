<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_umkm = Umkm::all();
        return view('umkm.umkm', compact('list_umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.form_umkm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
            'modal' => 'required | string',
            'pemilik' => 'required | string',
            'alamat' => 'required | string',
            'website' => 'required | string',
            'email' => 'required | string',
            'rating' => 'required | string',
            'kabkota_id' => 'required | integer',
            'kategori_umkm_id' => 'required | integer',
            'pembina_id' => 'required | integer',
        ]);
        Umkm::create($validated);
        return redirect('admin/umkm')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $umkm = Umkm::find($id);
        return view('umkm.detail_umkm', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $umkm = Umkm::find($id);
        return view('umkm.edit', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
            'modal' => 'required | string',
            'pemilik' => 'required | string',
            'alamat' => 'required | string',
            'website' => 'required | string',
            'email' => 'required | string',
            'rating' => 'required | string',
            'kabkota_id' => 'required | integer',
            'kategori_umkm_id' => 'required | integer',
            'pembina_id' => 'required | integer',
        ]);

        $umkm = Umkm::find($id);
        $umkm->update($validated);
        return redirect('admin/umkm')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();return redirect('admin/umkm')->with('pesan', 'Data Berhasil di Hapus');
    }
}
