<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zona;
use App\Models\Hewan;
use App\Models\Bangunan;
use App\Models\Treasure;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
      $zonas = Zona::all();
      $hewans = Hewan::all();
      $bangunans = Bangunan::all();
      $treasuresTrue = Treasure::where('lucky', true)->get();
      $treasuresFalse = Treasure::where('lucky', false)->get();
        return view('adminPage.components.dashboard', compact('zonas','hewans','bangunans','treasuresTrue','treasuresFalse'));
    }

    public function seluruhUser()
    {
        $users = User::where('role', 'user')->get();
        return view('adminPage.components.seluruhUser.seluruhUser', [
            'users' => $users,
        ]);
    }

    public function getUserDetail(User $user)
   {
      $user = User::findOrFail($user->id);

      $html = "";
      if (!empty($user)) {
         $html = "<tr>
              <td width='30%'><b>ID</b></td>
              <td width='70%'>: " . $user->id . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Nama</b></td>
              <td width='70%'>: " . $user->name . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Username</b></td>
              <td width='70%'>: " . $user->username . "</td>
           </tr>
           <tr>
              <td width='30%'><b>Email</b></td>
              <td width='70%'>: " . $user->email . "</td>
           </tr>
           <tr>
              <td width='30%'><b>No. Handphone</b></td>
              <td width='70%'>: " . $user->no_hp . "</td>
           </tr>
           <tr>
              <td width='50%'><img class='mt-3 rounded' width='200' src='" . asset('storage/' . $user->picture_profile) . "'></td>
           </tr>";
      }
      $response['html'] = $html;

      return response()->json($response);
   }
}
