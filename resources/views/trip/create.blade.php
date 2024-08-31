@extends('layouts.app')

@section('content')
    <div class="ms_bg p-5">
        @if(session('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage') }}
            </div>
        @endif

        <form action="{{ route('trips.store') }}" method="POST" enctype="multipart/form-data" class="bg-white py-3 px-5 rounded">
            @csrf
            @method('POST')
            <h1 class="text-center">Crea un viaggio</h1>

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

            <div class="mb-3">
                <label for="destination" class="form-label">Destinazione</label>
                <input
                    type="text"
                    id="destination"
                    class="form-control"
                    placeholder="Inserisci la destinazione"
                    name="destinazione"
                    value="{{ old('destinazione') }}"
                />
            </div>

            <div class="mb-3">
                <label for="data_inizio" class="form-label">Data Inizio</label>
                <input
                    type="date"
                    id="data_inizio"
                    class="form-control"
                    placeholder="Inserisci la data_inizio"
                    name="data_inizio"
                    value="{{ old('data_inizio') }}"
                />
            </div>


            <div class="mb-3">
                <label for="data_fine" class="form-label">Data Fine</label>
                <input
                    type="date"
                    id="data_fine"
                    class="form-control"
                    placeholder="Inserisci la data_fine"
                    name="data_fine"
                    value="{{ old('data_fine') }}"
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
