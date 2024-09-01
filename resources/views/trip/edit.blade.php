@extends('layouts.app')

@section('content')
    <div class="ms_bg p-5 container">
        @if (session('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage') }}
            </div>
        @endif

        <form action="{{ route('trips.update', $trip->id) }}" method="POST" class="bg-white py-3 px-5 rounded">
            @csrf
            @method('PUT')

            <h1 class="text-center">Modifica Viaggio</h1>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" id="title" class="form-control" placeholder="Inserisci il titolo" name="titolo"
                    value="{{ old('titolo', $trip->titolo) }}" />
            </div>

            <div class="mb-3">
                <label for="destination" class="form-label">Destinazione</label>
                <input type="text" id="destination" class="form-control" placeholder="Inserisci la destinazione"
                    name="destinazione" value="{{ old('destinazione', $trip->destinazione) }}" />
            </div>

            <div class="mb-3">
                <label for="data_inizio" class="form-label">Data Inizio</label>
                <input type="date" id="data_inizio" class="form-control" placeholder="Inserisci la data_inizio"
                    name="data_inizio" value="{{ old('data_inizio', $trip->data_inizio) }}" />
            </div>


            <div class="mb-3">
                <label for="data_fine" class="form-label">Data Fine</label>
                <input type="date" id="data_fine" class="form-control" placeholder="Inserisci la data_fine"
                    name="data_fine" value="{{ old('data_fine', $trip->data_fine) }}" />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea id="description" class="form-control" rows="2" placeholder="Inserisci una descrizione"
                    name="descrizione">{{ old('descrizione', $trip->descrizione) }}</textarea>
            </div>

            

            <div class="d-flex w-100 justify-content-between">

                <a href="http://localhost:3000" type="submit" style="background: #ffb871" class="btn text-white">Indietro</a>
                <button type="submit" style="background: #ffb871" class="btn text-white">Salva</button>
            </div>
        </form>
    </div>
@endsection
