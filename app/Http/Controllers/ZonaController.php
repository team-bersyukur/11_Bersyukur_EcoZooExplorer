<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::with('hewan')->get();

        return view('adminPage.components.dataZona.index', compact('zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.components.dataZona.create');
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
            'nama_zona' => 'required',
            'deskripsi_zona' => 'required',
            'foto_zona' => 'required',
            'foto_zona_detail' => 'required',
        ]);

        $data['foto_zona'] = $request->file('foto_zona')->store('fotoZona', 'public');
        $data['foto_zona_detail'] = $request->file('foto_zona_detail')->store('fotoZona', 'public');

        Zona::create($data);

        return redirect('/master/data-zona')->with('success', 'Data zona berhasil ditambahkan');
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
        $zona = Zona::find($id);

        return view('adminPage.components.dataZona.edit', compact('zona'));
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
        $zona = Zona::find($id);

        $data = $request->validate([
            'nama_zona' => 'required',
            'deskripsi_zona' => 'required',
        ]);

        if ($request->file('foto_zona')) {
            if (file_exists(storage_path('app/public/' . $zona->foto_zona))) {
                unlink(storage_path('app/public/' . $zona->foto_zona));
            }

            $data['foto_zona'] = $request->file('foto_zona')->store('fotoZona', 'public');
        } else {
            $data['foto_zona'] = $zona->foto_zona;
        }

        if ($request->file('foto_zona_detail')) {
            if (file_exists(storage_path('app/public/' . $zona->foto_zona_detail))) {
                unlink(storage_path('app/public/' . $zona->foto_zona_detail));
            }

            $data['foto_zona_detail'] = $request->file('foto_zona_detail')->store('fotoZona', 'public');
        } else {
            $data['foto_zona_detail'] = $zona->foto_zona_detail;
        }

        $zona->update($data);

        return redirect('/master/data-zona')->with('success', 'Data zona berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zona = Zona::find($id);

        if (file_exists(storage_path('app/public/' . $zona->foto_zona))) {
            unlink(storage_path('app/public/' . $zona->foto_zona));
        }

        if (file_exists(storage_path('app/public/' . $zona->foto_zona_detail))) {
            unlink(storage_path('app/public/' . $zona->foto_zona_detail));
        }

        Zona::destroy($id);

        Hewan::where('zona_id', $id)->delete();

        return redirect('/master/data-zona')->with('success', 'Data zona berhasil dihapus');
    }
}
