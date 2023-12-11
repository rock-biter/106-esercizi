<?php

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
    return view('home.index');
})->name('home');

Route::get('/about', function () {

    // $data = [
    //     'title' => 'Chi siamo',
    //     'user' => 'Gianni'
    // ];
    $title = 'Chi siamo noi';
    $user = 'Pippo';

    return view('chi-siamo', compact('title', 'user'));
})->name('chi-siamo');
