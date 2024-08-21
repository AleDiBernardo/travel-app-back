<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('stages')->insert([
            // Tappe per "Viaggio in Giappone"
            ['viaggio_id' => 1, 'immagine' => null, 'data' => '2024-03-02', 'titolo' => 'Tokyo', 'descrizione' => 'Visita alla città di Tokyo.', 'longitudine' => 139.69, 'latitudine' => 35.69],
            ['viaggio_id' => 1, 'immagine' => null, 'data' => '2024-03-05', 'titolo' => 'Kyoto', 'descrizione' => 'Scoperta dei templi di Kyoto.', 'longitudine' => 135.76, 'latitudine' => 35.01],
            ['viaggio_id' => 1, 'immagine' => null, 'data' => '2024-03-08', 'titolo' => 'Osaka', 'descrizione' => 'Visita al castello di Osaka.', 'longitudine' => 135.50, 'latitudine' => 34.69],
            ['viaggio_id' => 1, 'immagine' => null, 'data' => '2024-03-10', 'titolo' => 'Nara', 'descrizione' => 'Escursione a Nara.', 'longitudine' => 135.80, 'latitudine' => 34.68],
            ['viaggio_id' => 1, 'immagine' => null, 'data' => '2024-03-12', 'titolo' => 'Hiroshima', 'descrizione' => 'Visita al memoriale della pace.', 'longitudine' => 132.45, 'latitudine' => 34.39],

            // Tappe per "Tour dell\'Europa"
            ['viaggio_id' => 2, 'immagine' => null, 'data' => '2024-06-11', 'titolo' => 'Parigi', 'descrizione' => 'Tour della città di Parigi.', 'longitudine' => 2.35, 'latitudine' => 48.86],
            ['viaggio_id' => 2, 'immagine' => null, 'data' => '2024-06-15', 'titolo' => 'Londra', 'descrizione' => 'Visita ai principali monumenti di Londra.', 'longitudine' => -0.13, 'latitudine' => 51.51],
            ['viaggio_id' => 2, 'immagine' => null, 'data' => '2024-06-20', 'titolo' => 'Berlino', 'descrizione' => 'Esplorazione della storia di Berlino.', 'longitudine' => 13.41, 'latitudine' => 52.52],
            ['viaggio_id' => 2, 'immagine' => null, 'data' => '2024-06-25', 'titolo' => 'Roma', 'descrizione' => 'Visita ai luoghi storici di Roma.', 'longitudine' => 12.49, 'latitudine' => 41.89],
            ['viaggio_id' => 2, 'immagine' => null, 'data' => '2024-06-30', 'titolo' => 'Madrid', 'descrizione' => 'Scoperta della cultura spagnola a Madrid.', 'longitudine' => -3.70, 'latitudine' => 40.41],

            // Tappe per "Avventura in Sud America"
            ['viaggio_id' => 3, 'immagine' => null, 'data' => '2024-08-02', 'titolo' => 'Rio de Janeiro', 'descrizione' => 'Esplorazione di Rio de Janeiro.', 'longitudine' => -43.17, 'latitudine' => -22.91],
            ['viaggio_id' => 3, 'immagine' => null, 'data' => '2024-08-05', 'titolo' => 'Buenos Aires', 'descrizione' => 'Visita alla capitale argentina.', 'longitudine' => -58.38, 'latitudine' => -34.61],
            ['viaggio_id' => 3, 'immagine' => null, 'data' => '2024-08-10', 'titolo' => 'Machu Picchu', 'descrizione' => 'Escursione al Machu Picchu.', 'longitudine' => -72.54, 'latitudine' => -13.16],
            ['viaggio_id' => 3, 'immagine' => null, 'data' => '2024-08-14', 'titolo' => 'Santiago del Cile', 'descrizione' => 'Scoperta della cultura cilena.', 'longitudine' => -70.65, 'latitudine' => -33.44],
            ['viaggio_id' => 3, 'immagine' => null, 'data' => '2024-08-18', 'titolo' => 'Lima', 'descrizione' => 'Visita alla capitale peruviana.', 'longitudine' => -77.03, 'latitudine' => -12.04],

            // Tappe per "Road Trip in USA"
            ['viaggio_id' => 4, 'immagine' => null, 'data' => '2024-09-02', 'titolo' => 'New York', 'descrizione' => 'Esplorazione della città di New York.', 'longitudine' => -74.01, 'latitudine' => 40.71],
            ['viaggio_id' => 4, 'immagine' => null, 'data' => '2024-09-05', 'titolo' => 'Washington D.C.', 'descrizione' => 'Visita ai monumenti di Washington D.C.', 'longitudine' => -77.04, 'latitudine' => 38.91],
            ['viaggio_id' => 4, 'immagine' => null, 'data' => '2024-09-08', 'titolo' => 'Chicago', 'descrizione' => 'Scoperta della città del vento.', 'longitudine' => -87.63, 'latitudine' => 41.88],
            ['viaggio_id' => 4, 'immagine' => null, 'data' => '2024-09-11', 'titolo' => 'Las Vegas', 'descrizione' => 'Divertimento a Las Vegas.', 'longitudine' => -115.17, 'latitudine' => 36.11],
            ['viaggio_id' => 4, 'immagine' => null, 'data' => '2024-09-14', 'titolo' => 'San Francisco', 'descrizione' => 'Visita alla baia di San Francisco.', 'longitudine' => -122.42, 'latitudine' => 37.77],

            // Tappe per "Safari in Africa"
            ['viaggio_id' => 5, 'immagine' => null, 'data' => '2024-10-11', 'titolo' => 'Parco Nazionale Kruger', 'descrizione' => 'Safari nel Parco Nazionale Kruger.', 'longitudine' => 31.49, 'latitudine' => -23.98],
            ['viaggio_id' => 5, 'immagine' => null, 'data' => '2024-10-14', 'titolo' => 'Victoria Falls', 'descrizione' => 'Visita alle maestose cascate Vittoria.', 'longitudine' => 25.85, 'latitudine' => -17.93],
            ['viaggio_id' => 5, 'immagine' => null, 'data' => '2024-10-17', 'titolo' => 'Serengeti', 'descrizione' => 'Safari nel Serengeti.', 'longitudine' => 34.82, 'latitudine' => -2.33],
            ['viaggio_id' => 5, 'immagine' => null, 'data' => '2024-10-20', 'titolo' => 'Masai Mara', 'descrizione' => 'Esplorazione della riserva Masai Mara.', 'longitudine' => 35.15, 'latitudine' => -1.29],
            ['viaggio_id' => 5, 'immagine' => null, 'data' => '2024-10-23', 'titolo' => 'Table Mountain', 'descrizione' => 'Escursione sulla Table Mountain.', 'longitudine' => 18.42, 'latitudine' => -33.96],
        ]);
    }
}
