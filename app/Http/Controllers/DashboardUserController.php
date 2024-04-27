<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $zonas = Zona::with('hewan')->get();
        return view('userPage.main', compact('zonas'));
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
