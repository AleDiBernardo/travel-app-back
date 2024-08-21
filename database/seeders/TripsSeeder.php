<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TripsSeeder extends Seeder
{
    public function run()
    {
        DB::table('trips')->insert([
            [
                'titolo' => 'Viaggio in Giappone',
                'destinazione' => 'Giappone',
                'data_inizio' => '2024-03-01',
                'data_fine' => '2024-03-15',
                'descrizione' => 'Un viaggio alla scoperta delle tradizioni giapponesi.'
            ],
            [
                'titolo' => 'Tour dell\'Europa',
                'destinazione' => 'Europa',
                'data_inizio' => '2024-06-10',
                'data_fine' => '2024-07-05',
                'descrizione' => 'Un tour delle principali città europee.'
            ],
            [
                'titolo' => 'Avventura in Sud America',
                'destinazione' => 'Sud America',
                'data_inizio' => '2024-08-01',
                'data_fine' => '2024-08-20',
                'descrizione' => 'Un viaggio attraverso i paesaggi mozzafiato del Sud America.'
            ],
            [
                'titolo' => 'Road Trip in USA',
                'destinazione' => 'USA',
                'data_inizio' => '2024-09-01',
                'data_fine' => '2024-09-15',
                'descrizione' => 'Un viaggio on the road negli Stati Uniti.'
            ],
            [
                'titolo' => 'Safari in Africa',
                'destinazione' => 'Africa',
                'data_inizio' => '2024-10-10',
                'data_fine' => '2024-10-25',
                'descrizione' => 'Un safari tra i parchi nazionali africani.'
            ]
        ]);
    }
}
