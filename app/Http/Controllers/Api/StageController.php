<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
    public function create()
    {

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
        // try {
            $validatedData = $request->validate([
                'viaggio_id' => 'required|exists:trips,id',
                'data' => 'required|date',
                'titolo' => 'required|string|max:255',
                'luogo' => 'required|string|max:255',
                'descrizione' => 'nullable|string',
                // 'immagine' => 'nullable|file|image|max:2048',
            ]);
            // dd($validatedData);
    
            
            $coordinates = $this->getCoordinates($request->input('luogo'));
            // dd($coordinates);
            
            $newStage = new Stage();
            // $newStage->fill($validatedData);
            $newStage->viaggio_id = intval($validatedData['viaggio_id']);
            $newStage->titolo = $validatedData['titolo'];
            $newStage->data = $request['data'];
            $newStage->descrizione = $validatedData['descrizione'] ?? null;
            $newStage->longitudine = $coordinates['longitudine'] ?? null;
            $newStage->latitudine = $coordinates['latitudine'] ?? null;            
            if ($request->hasFile('immagine')) {
                $path = $request->file('immagine')->store('images', 'public');
                $newStage->immagine = $path;
                // dd($request);
                // dd($validatedData['immagine']);
            }
            $newStage->save();
            return response()->json(['success' => 'Stage creato con successo!'], 201);
            // dd($newStage);
    
        // } catch (\Exception $e) {
            // Logga l'errore
        //     Log::error('Errore durante la creazione di una tappa: ' . $e->getMessage());
        //     return response()->json(['error' => 'Si è verificato un errore durante la creazione della tappa.'], 500);
        // }
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
        $stage = Stage::findOrFail($id);
        // dd($stage);
        if ($stage->immagine) {
            Storage::delete($stage->immagine);
        }
        $stage->delete();
    }
}
