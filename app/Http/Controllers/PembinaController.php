<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pembina = Pembina::all();
        return view('pembina.pembina', compact('list_pembina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembina.form_pembina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required | string',
            'gender' => 'required | string',
            'tgl_lahir' => 'required | date',
            'tmp_lahir' => 'required | string',
            'keahlian' => 'required | string',
        ]);
        Pembina::create($validated);
        return redirect('admin/pembina')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembina = Pembina::find($id);
        return view('pembina.detail_pembina', compact('pembina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembina = Pembina::find($id);
        return view('pembina.edit', compact('pembina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required | string',
            'gender' => 'required | string',
            'tgl_lahir' => 'required | date',
            'tmp_lahir' => 'required | string',
            'keahlian' => 'required | string',
        ]);

        $pembina = Pembina::find($id);
        $pembina->update($validated);
        return redirect('admin/pembina')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembina = Pembina::find($id);
        $pembina->delete();return redirect('admin/pembina')->with('pesan', 'Data Berhasil di Hapus');
    }
}