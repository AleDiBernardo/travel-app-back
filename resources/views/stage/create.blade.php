@extends('layouts.app')

@section('content')
    <div class="ms_bg p-5">
        @if(session('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage') }}
            </div>
        @endif

        <form action="{{ route('stages.store') }}" method="POST" enctype="multipart/form-data" class="bg-white py-3 px-5 rounded">
            @csrf
            @method('POST')
            <h1 class="text-center">Aggiungi Nuova Tappa</h1>

            <!-- Input per il file dell'immagine -->
            <input type="hidden" id="data" name="data" value="{{ $data }}">
            <input type="hidden" id="viaggio_id" name="viaggio_id" value="{{ $viaggio_id }}">

            <div class="mb-3">
                <label for="image" class="form-label">Carica Immagine</label>
                <input
                    type="file"
                    id="image"
                    class="form-control"
                    name="immagine"
                />
            </div>

            <!-- Input di testo per il titolo -->
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                    type="text"
                    id="title"
                    class="form-control"
                    placeholder="Inserisci il titolo"
                    name="titolo"
                    value="{{ old('titolo') }}"
                />
            </div>

            <!-- Input di testo per il luogo -->
            <div class="mb-3">
                <label for="location" class="form-label">Luogo</label>
                <input
                    type="text"
                    id="location"
                    class="form-control"
                    placeholder="Inserisci il luogo"
                    name="luogo"
                    value="{{ old('luogo') }}"
                />
            </div>

            <!-- Textarea per la descrizione -->
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea
                    id="description"
                    class="form-control"
                    rows="2"
                    placeholder="Inserisci una descrizione"
                    name="descrizione"
                >{{ old('descrizione') }}</textarea>
            </div>

            <!-- Pulsante di invio -->
            <button type="submit" style="background: #ffb871" class="btn text-white">Salva Tappa</button>
        </form>
    </div>
@endsection
