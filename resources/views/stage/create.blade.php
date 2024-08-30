{{-- resources/views/add_stage.blade.php --}}
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Nuova Tappa</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="ms_bg p-5">
        @if(session('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage') }}
            </div>
        @endif

        <form action="{{ route('stages.store') }}" method="POST" enctype="multipart/form-data" class="bg-white py-3 px-5 rounded">
            @csrf
            <h1 class="text-center">Aggiungi Nuova Tappa</h1>

            <!-- Input per il file dell'immagine -->
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
            <button type="submit" class="btn">Salva Tappa</button>
        </form>
    </div>
</body>
</html>
