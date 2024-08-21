<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    public function run()
    {
        DB::table('notes')->insert([
            ['tappa_id' => 1, 'nota' => 'Tokyo è una città vibrante e moderna, ma ricca di storia.'],
            ['tappa_id' => 2, 'nota' => 'Kyoto ha alcuni dei templi più belli del Giappone.'],
            ['tappa_id' => 6, 'nota' => 'La Torre Eiffel è un must per ogni visita a Parigi.'],
            ['tappa_id' => 11, 'nota' => 'Il Cristo Redentore offre una vista spettacolare di Rio de Janeiro.'],
            ['tappa_id' => 21, 'nota' => 'Il parco è un vero e proprio santuario per la fauna africana.'],
        ]);
    }
}
