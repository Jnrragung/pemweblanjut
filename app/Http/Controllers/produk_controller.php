<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View; 

 


class produk_controller extends Controller
{
    // ... Metode index tidak ada perubahan ...
    public function index(): View // Tambahkan View sebagai tipe return
    {
      $data = produk::all();
      return view( 'produk',
        compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View // Pastikan View huruf besar
    {
        return view('produk_create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([ 
            'nama_produk' => 'required|string|max:100|unique:produk,nama_produk',
            'kategori' => 'required|string|max:50',
            'harga_satuan' => 'required|numeric|min:1',
            'stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:20',
        ]);

        Produk::create([ 
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga_satuan' => $request->harga_satuan,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
        ]);
        
        // **Tambahkan return untuk memenuhi RedirectResponse**
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    } // <--- METHOD store DITUTUP DI SINI


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk_edit', compact('produk')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'nama_produk'   => 'required|string|max:100|unique:produk,nama_produk,' . $id . ',id_produk',
            'kategori'      => 'required|string|max:50',
            'harga_satuan'  => 'required|numeric|min:1',
            'stok'          => 'required|integer|min:0',
            'satuan'        => 'required|string|max:20',
        ]);

        $produk->update([
            'nama_produk'   => $request->nama_produk,
            'kategori'      => $request->kategori,
            'harga_satuan'  => $request->harga_satuan,
            'stok'          => $request->stok,
            'satuan'        => $request->satuan,
        ]);

        return redirect('/produk')
            ->with('success', 'Produk berhasil diperbarui!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
} // <--- CLASS DITUTUP DI SINI (Hanya satu penutup class)