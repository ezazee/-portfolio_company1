<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanKerjasama;
use Illuminate\Support\Facades\File;

class PerusahaanKerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaan = PerusahaanKerjasama::all();
        return view('admin.perusahaan_kerjasama.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.perusahaan_kerjasama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, PerusahaanKerjasama $perusahaanKerjasama)
    {
        $this->validate($request, [
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $input = $request->all();

         if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $perusahaanKerjasama->create($input);

        //redirect to index
        return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Ditambah!']);
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
        $perusahaan = PerusahaanKerjasama::all();
        return view('admin.perusahaan_kerjasama.edit', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerusahaanKerjasama $perusahaanKerjasama)
    {
         $this->validate($request, [
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

         if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $perusahaanKerjasama->update($input);

        //redirect to index
        return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Dirubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerusahaanKerjasama $perusahaanKerjasama, $id)
    {
        $data = PerusahaanKerjasama::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
