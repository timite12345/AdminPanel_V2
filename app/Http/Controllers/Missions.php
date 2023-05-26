<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class Missions extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $missions = Mission::all();

        return view('dashboard',compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    // public function show(string $id)
    // {
    //       $missions = Missions::all();

    //     return view('Mission.Details', compact('missions'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $missions = Mission::all();
        return view('Mission.Edit', compact('missions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mission $missions)
    {
        $request->validate([
            'nom_client' => 'required',
            'tel_client' => 'required',
            'article_id' => 'required',
            'nombre_article' => 'required',
            'montant_article' => 'required',
        ]);

        $missions->update($request->all());

        return back()->with('message','Achat modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Missions $missions)
    // {
    //       $missions->delete();

    //     return back()->with('message',"L'achat supprimé avec succès");
    // }
}
