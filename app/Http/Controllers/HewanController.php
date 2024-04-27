<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Zona;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewans = Hewan::with('zona')->get();

        return view('adminPage.components.dataHewan.index', compact('hewans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        return view('adminPage.components.dataHewan.create', compact('zonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_hewan' => 'required',
            'nama_ilmiah_hewan' => 'required',
            'jenis_hewan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
            'zona_id' => 'required'
        ]);

        $data['foto'] = $request->file('foto')->store('assets/fotoHewan', 'public');

        Hewan::create($data);

        return redirect('/master/data-hewan')->with('success', 'Data hewan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hewan = Hewan::find($id);
        $zonas = Zona::all();

        return view('adminPage.components.dataHewan.edit', compact('hewan', 'zonas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hewan = Hewan::find($id);

        $data = $request->validate([
            'nama_hewan' => 'required',
            'nama_ilmiah_hewan' => 'required',
            'jenis_hewan' => 'required',
            'deskripsi' => 'required',
            'zona_id' => 'required'
        ]);

        if ($request->file('foto')) {
            if (file_exists(storage_path('app/public/' . $hewan->foto))) {
                unlink(storage_path('app/public/' . $hewan->foto));
            }
            $data['foto'] = $request->file('foto')->store('fotoHewan', 'public');
        } else {
            $data['foto'] = $hewan->foto;
        }

        $hewan->update($data);

        return redirect('/master/data-hewan')->with('success', 'Data hewan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hewan = Hewan::find($id);

        if (file_exists(storage_path('app/public/' . $hewan->foto))) {
            unlink(storage_path('app/public/' . $hewan->foto));
        }

        $hewan->delete();

        return redirect('/master/data-hewan')->with('success', 'Data hewan berhasil dihapus');
    }
}
