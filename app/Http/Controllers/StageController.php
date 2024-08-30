<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class StageController extends Controller
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
    public function create(Request $request)
    {
        // dd($request);
        $viaggio_id = $request->query('viaggio_id');
        $data = $request->query('data');
        return view('stage.create', compact('data','viaggio_id'));

    }

    private function getCoordinates($cityName)
    {
        // dd($cityName);
        $apiKey = env('TOMTOM_API_KEY');
        // dd($apiKey);
        $url = "https://api.tomtom.com/search/2/geocode/" . urlencode($cityName) . ".json?key=" . $apiKey;
        // dd($url);

        $response = Http::withOptions([
            'verify' => false, 
        ])
        ->get($url);

        // dd($response);
        if ($response->successful()) {
            $data = $response->json();
            // dd($data);
            if (!empty($data['results'])) {
                $location = $data['results'][0]['position'];
                // dd($location);
                return [
                    'latitudine' => $location['lat'],
                    'longitudine' => $location['lon'],
                ];
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'viaggio_id' => 'required|exists:trips,id',
            'data' => 'required|date',
            'titolo' => 'required|string|max:255',
            'luogo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            // 'immagine' => 'nullable|file|image|max:2048',
        ]);
        $coordinates = $this->getCoordinates($request->input('luogo'));
        $newStage = new Stage();
        $newStage->viaggio_id = intval($validatedData['viaggio_id']);
        $newStage->titolo = $validatedData['titolo'];
        $newStage->data = $request['data'];
        $newStage->descrizione = $validatedData['descrizione'] ?? null;
        $newStage->longitudine = $coordinates['longitudine'] ?? null;
        $newStage->latitudine = $coordinates['latitudine'] ?? null;
        if ($request->hasFile('immagine')) {
            $path = $request->file('immagine')->store('images', 'public');
            $newStage->immagine = $path;
        }
        $newStage->save();
        return redirect('http://localhost:3000',302);
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
