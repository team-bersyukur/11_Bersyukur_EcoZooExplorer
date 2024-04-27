<?php

namespace App\Http\Controllers;

use App\Models\Treasure;
use App\Models\Zona;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TreasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treasures = Treasure::with('zona')->get();

        return view('adminPage.components.dataTreasure.index', compact('treasures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();

        return view('adminPage.components.dataTreasure.create', compact('zonas'));
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
            'zona_id' => 'required'
        ]);

        $data['kode_unik'] = Str::random(6);

        Treasure::create($data);

        return redirect('/master/data-treasure')->with('success', 'Data treasure berhasil ditambahkan');
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
        $treasure = Treasure::find($id);
        $zonas = Zona::all();

        return view('adminPage.components.dataTreasure.edit', compact('treasure', 'zonas'));
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
        $treasure = Treasure::find($id);

        $data = $request->validate([
            'zona_id' => 'required'
        ]);

        if (isset($request->ganti)) {
            $data['kode_unik'] = Str::random(6);
        }

        $treasure->update($data);

        return redirect('/master/data-treasure')->with('success', 'Data treasure berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Treasure::destroy($id);

        return redirect('/master/data-treasure')->with('success', 'Data treasure berhasil dihapus');
    }

    public function acakTreasure()
    {
        $treasures = Treasure::all();

        foreach ($treasures as $treasure) {
            $treasure->update([
                'lucky' => false
            ]);
        }

        $i = 0;

        while ($i < 3) {
            $lucky = Treasure::inRandomOrder()->first();
            $lucky->update([
                'lucky' => true
            ]);
            $i++;
        }

        return redirect('/master/data-treasure')->with('success', 'Data treasure berhasil diacak');
    }

    public function kodeUnik(Request $request)
    {
        $kode_unik = $request->kode_unik;

        $treasure = Treasure::where('kode_unik', $kode_unik)
            ->where('lucky', true)
            ->first();

        if ($treasure) {
            $treasures = Treasure::all();

            foreach ($treasures as $treasure) {
                $treasure->update([
                    'lucky' => false
                ]);
            }

            $i = 0;

            while ($i < 3) {
                $lucky = Treasure::inRandomOrder()->first();
                $lucky->update([
                    'lucky' => true
                ]);
                $i++;
            }

            // $now = new DateTime();
            date_default_timezone_set('Asia/Jakarta');
            
            $now = date('Y-m-d H:i:s');

            return response()->json([
                'status' => 'success',
                'message' => 'YEAAYYYYY... Kamu menemukan harta karun tersembunyi. Screenshoot halaman ini untuk mendapatkan hadiah',
                'waktu' => $now
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Yahhh.... Kamu belum beruntung... :('
            ]);
        }
    }
}
