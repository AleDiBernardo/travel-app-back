<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = [
        'id_tappa',
        'nota',
    ];

    // Relazione molti a uno con Tappe
    public function stage()
    {
        return $this->belongsTo(Stages::class, 'id_tappa');
    }
}
