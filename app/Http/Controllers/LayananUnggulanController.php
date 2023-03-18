<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\LayananUnggulan;
use Illuminate\Http\Request;
use App\Models\PerusahaanKerjasama;
use Illuminate\Support\Facades\File;

class LayananUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananUnggulan::all();
        return view('admin.layanan_unggulan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan_unggulan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, LayananUnggulan $layanan )
    {
        $this->validate($request, [
            'title'    => 'required|min:5',
            'deskripsi'     => 'required|min:5',
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

        $layanan->create($input);

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Ditambah!']);
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
        $layanan = LayananUnggulan::find($id);
        return view('admin.layanan_unggulan.edit', compact(['layanan']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LayananUnggulan $layanan)
    {
        $this->validate($request, [
            'title'    => 'required|min:5',
            'deskripsi'     => 'required|min:5',
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

        $layanan->update($input);

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = LayananUnggulan::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
