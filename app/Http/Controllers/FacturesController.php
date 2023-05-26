<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Facture;
use App\Models\Hopital;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Facture::latest()->paginate(4);
        $missions = Mission::latest()->paginate(4);
        $hopitals = Hopital::all();
        $chauffeurs = Chauffeur::all();

     return view('ListesFacture', compact('factures','missions','hopitals','chauffeurs'));
    }

public function EditerFactures(Request $request){
        $hopitals = Hopital::all();
        $chauffeurs = Chauffeur::all();
    return view('EditerFactures',compact('hopitals','chauffeurs'));
}
    /**
     * Show the form for creating a new resource.
//      */
public function CreateFacture(Request $request){
    $data= $request->all();
 //  dd($data);
    $hopitals = Hopital::all();
    $chauffeurs = Chauffeur::all();
    $factures =Facture::all();
    Facture::create($data);
    session()->flash('Succes','Un nouvel hopital ajouté');

        return redirect('/ListesFactures');
  }

    /**
     * Store a newly created resource in storage.
     */
  public function getFacturePdf(){
    $hopitals= Hopital::all();
    $chauffeurs=Chauffeur::all();
    $missions = Mission::all();
    $pdf = PDF::loadView('PdfFacture', compact('hopitals','chauffeurs','missions'));
    return $pdf->stream();
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
    public function destroye1($factures)
    {
          Facture::findOrFail($factures)->delete();
        return back()->with('message'," Facture supprimé avec succès");
    }
}
