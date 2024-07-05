<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kabkota = Kabkota::all();
        return view('kabkota.kabkota', compact('list_kabkota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kabkota.form_kabkota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
            'lattitude' => 'required | string',
            'longitude' => 'required | string',
            'provinsi_id' => 'required | integer'
        ]);
        Kabkota::create($validated);
        return redirect('admin/kabkota')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kabkota = Kabkota::find($id);
        return view('kabkota.detail_kabkota', compact('kabkota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kabkota = Kabkota::find($id);
        return view('kabkota.edit', compact('kabkota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
            'lattitude' => 'required | string', 
            'longitude' => 'required | string',
            'provinsi_id' => 'required | integer',
        ]);

        $kabkota = Kabkota::find($id);
        $kabkota->update($validated);
        return redirect('admin/kabkota')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kabkota = Kabkota::find($id);
        $kabkota->delete();return redirect('admin/kabkota')->with('pesan', 'Data Berhasil di Hapus');
    }
}
