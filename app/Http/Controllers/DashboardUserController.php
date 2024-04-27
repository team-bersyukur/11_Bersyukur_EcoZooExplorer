<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Hewan;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $zonas = Zona::with('hewan')->get();
        $hewans = Hewan::all();
        return view('userPage.components.home', compact('zonas','hewans'));
    }

    public function treasure()
    {
        return view('userPage.components.treasure');
    }



    public function getZona(Zona $zona)
    {
        $zona = Zona::with('hewan')->where('id', $zona->id)->first();

        return response()->json([
            'status' => 'success',
            'data' => $zona
        ]);
    }
}
