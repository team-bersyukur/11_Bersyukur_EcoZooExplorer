<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Zona;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bangunans = Bangunan::with('zona')->get();
        $zonas = Zona::all();

        return view('adminPage.components.dataBangunan.index', compact('bangunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        return view('adminPage.components.dataBangunan.create', compact('zonas'));
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
            'nama_bangunan' => 'required',
            'zona_id' => 'required'
        ]);

        Bangunan::create($data);

        return redirect('/master/data-bangunan')->with('success', 'Data bangunan berhasil ditambahkan');
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
        $bangunan = Bangunan::find($id);
        $zonas = Zona::all();

        return view('adminPage.components.dataBangunan.edit', compact('bangunan', 'zonas'));
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
        $data = $request->validate([
            'nama_bangunan' => 'required',
            'zona_id' => 'required'
        ]);

        Bangunan::find($id)->update($data);

        return redirect('/master/data-bangunan')->with('success', 'Data bangunan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bangunan::destroy($id);

        return redirect('/master/data-bangunan')->with('success', 'Data bangunan berhasil dihapus');
    }
}
