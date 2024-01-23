<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\ViewCOntroller;

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
//     return view('welcome');
// });

Route::get('/', [ViewCOntroller::class, 'screener'])->name('screener');
Route::get('/alert', [ViewCOntroller::class, 'alert'])->name('alert');
Route::get('/overview', [ViewCOntroller::class, 'overview'])->name('overview');
