<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TentangMkd;

class TentangMkdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangmkd = TentangMkd::all();
        return view('admin.tentang_mkd.index', compact('tentangmkd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TentangMkd $tentangmkd)
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TentangMkd $tentangmkd)
    {
        $input = $request->all();

       // Cek jika ada gambar yang diupload
        if ($gambar = $request->file('gambar')) {
            $destinationPath = public_path('/images/');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        } else {
            unset($input['gambar']);
        }

        $tentangmkd->update($input);

        //redirect to index
        return redirect()->route('tentangmkd.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
