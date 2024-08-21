<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('ratings')->insert([
            ['tappa_id' => 1, 'voto' => 5],
            ['tappa_id' => 2, 'voto' => 4],
            ['tappa_id' => 6, 'voto' => 5],
            ['tappa_id' => 11, 'voto' => 5],
            ['tappa_id' => 21, 'voto' => 4],
        ]);
    }
}
