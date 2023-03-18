<?php

namespace App\Http\Controllers;

use App\Models\TeamMkd;
use Illuminate\Http\Request;

class TeamKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = TeamMkd::all();
        return view('admin.team_kami.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team_kami.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TeamMkd $team)
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

        $team->create($input);

        //redirect to index
        return redirect()->route('team.index')->with(['success' => 'Data Berhasil Ditambah!']);
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
        $team = TeamMkd::find($id);
        return view('admin.team_kami.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMkd $team)
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

        $team->update($input);

        //redirect to index
        return redirect()->route('team.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TeamMkd::find($id);
        $data->delete();
        //redirect to index
        return redirect()->route('team.index')->with(['success' => 'Data Berhasil Hapus!']);
    }
}
