<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $table = 'stages';

    protected $fillable = [
        'id_viaggio',
        'immagine',
        'data',
        'titolo',
        'descrizione',
        'longitudine',
        'latitudine',
    ];

    // Relazione molti a uno con Viaggi
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'viaggio_id');
    }

    // Relazione uno a molti con Note
    public function notes()
    {
        return $this->hasMany(Note::class, 'id_tappa');
    }

    // Relazione uno a molti con Valutazioni
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'id_tappa');
    }
}
