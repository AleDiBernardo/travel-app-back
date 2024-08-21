<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $fillable = [
        'titolo',
        'destinazione',
        'data_inizio',
        'data_fine',
        'descrizione',
    ];

    // Relazione uno a molti con Tappe
    public function stages()
    {
        return $this->hasMany(Stages::class, 'id_viaggio');
    }
}
