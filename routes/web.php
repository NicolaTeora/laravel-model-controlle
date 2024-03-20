<?php

use App\Http\Controllers\Guest\MoviePageController;
use App\Http\Controllers\PageController;
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

//imposto il controller per gestire la rotta delle pagine

Route::get('/', [PageController::class, 'home'])->name('home');

//imposto il controller per gestire la rotta delle RISORSE

Route::get('/movies', [MoviePageController::class, 'index'])->name('movies');
Route::get('/more-info/{movie}', [MoviePageController::class, 'MoreInfoMovie'])->name('more-info');
