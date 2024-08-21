<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stages extends Model
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
        return $this->belongsTo(Trips::class, 'id_viaggio');
    }

    // Relazione uno a molti con Note
    public function notes()
    {
        return $this->hasMany(Notes::class, 'id_tappa');
    }

    // Relazione uno a molti con Valutazioni
    public function ratings()
    {
        return $this->hasMany(Ratings::class, 'id_tappa');
    }
}
