<?php

use App\Http\Controllers\PastaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/**
 * CRUD Pastas
 */

// Route::get('/pastas', [PastaController::class, 'index'])
//     ->name('pastas.index');

// Route::get('/pastas/create', [PastaController::class, 'create'])
//     ->name('pastas.create');

// Route::get('/pastas/{pasta}', [PastaController::class, 'show'])
//     ->name('pastas.show');

// Route::post('/pastas', [PastaController::class, 'store'])
//     ->name('pastas.store');

// Route::get('/pastas/{pasta}/edit', [PastaController::class, 'edit'])
//     ->name('pastas.edit');

// Route::put('/pastas/{pasta}', [PastaController::class, 'update'])
//     ->name('pastas.update');

// Route::delete('/pastas/{pasta}', [PastaController::class, 'destroy'])
//     ->name('pastas.destroy');


Route::resource('pastas', PastaController::class);
