<?php

namespace App\Http\Controllers;

use App\Models\ProdukPerusahaan;
use Illuminate\Http\Request;

class ProdukPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = ProdukPerusahaan::all();
        return view('admin.produk_perusahaan.index',  compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk_perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProdukPerusahaan $produk)
    {
        
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $produk->create($input);

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

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
        $produk = ProdukPerusahaan::find($id);
        return view('admin.produk_perusahaan.edit', compact(['produk']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdukPerusahaan $produk)
    {
        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $produk->update($input);

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ProdukPerusahaan::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
