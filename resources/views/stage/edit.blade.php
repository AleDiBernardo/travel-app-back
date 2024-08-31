@extends('layouts.app')

@section('content')
    <div class="ms_bg p-5">
        @if(session('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage') }}
            </div>
        @endif

        <form action="{{ route('stages.update', $stage->id) }}" method="POST" enctype="multipart/form-data" class="bg-white py-3 px-5 rounded">
            @csrf
            @method('PUT')
            <h1 class="text-center">Modifica Tappa</h1>

            <input type="hidden" id="data" name="data" value="{{ $stage->data }}">
            <input type="hidden" id="viaggio_id" name="viaggio_id" value="{{ $stage->viaggio_id }}">

            <div class="mb-3">
                <label for="image" class="form-label">Carica Immagine</label>
                <input
                    type="file"
                    id="image"
                    class="form-control"
                    name="immagine"
                />
                @if($stage->immagine)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $stage->immagine) }}" alt="Immagine Attuale" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                    type="text"
                    id="title"
                    class="form-control"
                    placeholder="Inserisci il titolo"
                    name="titolo"
                    value="{{ old('titolo', $stage->titolo) }}"
                />
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Luogo</label>
                <input
                    type="text"
                    id="location"
                    class="form-control"
                    placeholder="Inserisci il luogo"
                    name="luogo"
                    value="{{ old('luogo', $location) }}"
                />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea
                    id="description"
                    class="form-control"
                    rows="2"
                    placeholder="Inserisci una descrizione"
                    name="descrizione"
                >{{ old('descrizione', $stage->descrizione) }}</textarea>
            </div>

            <button type="submit" style="background: #ffb871" class="btn text-white">Aggiorna Tappa</button>
        </form>
    </div>
@endsection
