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
        return view('trip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'data_inizio' => 'required|date',
            'data_fine' => 'required|date',
            'titolo' => 'required|string|max:255',
            'destinazione' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        $newTrip = new Trip();
        $newTrip->titolo = $validatedData['titolo'];
        $newTrip->descrizione = $validatedData['descrizione'] ?? null;
        $newTrip->destinazione = $validatedData['destinazione'];
        $newTrip->data_inizio = $validatedData['data_inizio'];
        $newTrip->data_fine = $validatedData['data_fine'];

        $newTrip->save();
        return redirect('http://localhost:3000', 302);

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
