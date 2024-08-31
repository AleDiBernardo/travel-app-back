<?php

use App\Http\Controllers\StageController;
use App\Http\Controllers\TripController;
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

Route::get('/', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('home', $data);
})->name('home');


Route::get('/about', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('about', $data);
})->name('about');

Route::get('/stages/create', [StageController::class, 'create'])->name('stages.create');
Route::post('/stages', [StageController::class, 'store'])->name('stages.store');
Route::get('/stages/{id}/edit', [StageController::class, 'edit'])->name('stages.edit');
Route::put('/stages/{id}', [StageController::class, 'update'])->name('stages.update');


Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');


