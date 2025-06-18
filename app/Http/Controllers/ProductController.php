<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_produks = Product::all();
        return view('produks.produks', compact('list_produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produks.form_produks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',  // Ganti 'text' → 'string'
            'price' => 'required|numeric',       // Ganti 'decimal' → 'numeric'
        ]);
        Product::create($validated);
        return redirect('admin/produks')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produks = Product::find($id);
        return view('produks.detail_produks', compact('produks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produks = Product::find($id);
        return view('produks.edit', compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',  // Ganti 'text' → 'string'
            'price' => 'required|numeric',       // Ganti 'decimal' → 'numeric'
            // 'image' => 'required | string',
        ]);

        $produks = Product::find($id);
        $produks->update($validated);
        return redirect('admin/produks')->with('pesan','Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produks = Product::find($id);
        $produks->delete();return redirect('admin/produks')->with('pesan', 'Data Berhasil di Hapus');
    }
}
