<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trip = Trip::findOrFail($id);
        // dd($trip);
        return view('trip.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'titolo' => 'required|string|max:255',
            'destinazione' => 'required|string|max:255',
            'data_inizio' => 'required|date',
            'data_fine' => 'required|date|after_or_equal:data_inizio',
            'descrizione' => 'nullable|string',
        ]);
    
        $trip = Trip::findOrFail($id);
    
        $trip->titolo = $validatedData['titolo'];
        $trip->destinazione = $validatedData['destinazione'];
        $trip->data_inizio = $validatedData['data_inizio'];
        $trip->data_fine = $validatedData['data_fine'];
        $trip->descrizione = $validatedData['descrizione'];
    
        $trip->save();
    
        return redirect('http://localhost:3000', 302);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
