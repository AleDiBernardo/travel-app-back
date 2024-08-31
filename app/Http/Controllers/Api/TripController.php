<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::with('stages')->get();
        $data = [
            'success' => true,
            'results' => $trips,
        ];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titolo' => 'required|string|max:255',
            'destinazione' => 'required|string|max:255',
            'data_inizio' => 'required|date',
            'data_fine' => 'required|date|after_or_equal:data_inizio',
            'descrizione' => 'nullable|string',
        ]);

        $newTrip = new Trip();
        $newTrip->fill($validatedData);
        $newTrip->save();

        // return redirect()->route('trips.index')->with('success', 'Viaggio creato con successo!');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trip = Trip::findOrFail($id);
        // dd($trip);
        $trip->delete();
    }
}