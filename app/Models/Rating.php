<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
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
        return $this->belongsTo(Stage::class, 'id_tappa');
    }
}
