<?php

namespace App\Http\Controllers\API;

use App\Models\Hopital;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HopitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hopitals = Hopital::all();
        return response()->json($hopitals);
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
    public function destroy(string $id)
    {
        //
    }
}
