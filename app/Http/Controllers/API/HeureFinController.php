<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class HeureFinController extends Controller
{
      public function updateheureFin( Request $request, $id){
         $mission= Mission::findOrFail($id);
         $timestamp = date('Y-m-d H:i:s', strtotime($request->heureFin));
         $mission->update([
        'heureFin'=>$timestamp,
    ]);
    }

}
