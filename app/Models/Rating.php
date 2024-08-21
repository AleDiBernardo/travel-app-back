<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'id_tappa',
        'voto',
    ];

    // Relazione molti a uno con Tappe
    public function stage()
    {
        return $this->belongsTo(Stages::class, 'id_tappa');
    }
}
