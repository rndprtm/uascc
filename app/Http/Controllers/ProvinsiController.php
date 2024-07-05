<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_provinsi = Provinsi::all();
        return view('provinsi.provinsi', compact('list_provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provinsi.form_provinsi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
            'ibukota' => 'required | string',
            'lattitude' => 'required | string',
            'longitude' => 'required | string',
        ]);
        Provinsi::create($validated);
        return redirect('admin/provinsi')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provinsi = Provinsi::find($id);
        return view('provinsi.detail_provinsi', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinsi = Provinsi::find($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
            'ibukota' => 'required | string',
            'lattitude' => 'required | string', 
            'longitude' => 'required | string',
        ]);

        $provinsi = Provinsi::find($id);
        $provinsi->update($validated);
        return redirect('admin/provinsi')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        return redirect('admin/provinsi')->with('pesan', 'Data Berhasil di Hapus');
    }
}
