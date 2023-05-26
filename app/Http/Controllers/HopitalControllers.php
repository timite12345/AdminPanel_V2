<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use Illuminate\Http\Request;

class HopitalControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Recupérer tout les champs dans le formulaire pour les insérer dans la base de données
    public function CreateHopital(Request $request)
    {
        $data= $request->all();
        Hopital::create($data);
        return redirect('/ListesHopitals'); //retourner la view /ListesHopitals
    }

    /**
     * Show the form for creating a new resource.
     */
    // Récupérer toutes les donnés dans la BD hopitals pour afficher
    public function GetListes()
    {
        $hopitals = Hopital::latest()->paginate(4);
       return view('ListesHopitals', compact('hopitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show1(string $id)
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroye2($hopitals)
    {
         Hopital::findOrFail($hopitals)->delete();
        return back()->with('message'," Hopital supprimé avec succès");
    }
}
