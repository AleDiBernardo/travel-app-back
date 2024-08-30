<?php

use App\Http\Controllers\StageController;
use App\Models\Stage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $data=[
//         'greetings' => "Laravel-Vite template",
//     ];
//     return view('home', $data);
// })->name('home');


// Route::get('/about', function () {
//     $data=[
//         'greetings' => "Laravel-Vite template",
//     ];
//     return view('about', $data);
// })->name('about');

// Rotta per visualizzare il form
Route::get('/stages/create', [StageController::class, 'create'])->name('stages.create');

// Rotta per gestire l'invio del form
Route::post('/stages', [StageController::class, 'store'])->name('stages.store');