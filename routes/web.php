<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCOntroller;
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\User\AlertController;
use App\Http\Controllers\EmailverificationController;

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

Auth::routes(['verify' => true]);

Route::get('/', [FrontendController::class, 'landing'])->name('home');

// Route::group(['middleware' => ['auth', 'unverified']], function (){
    // Route::get('/email/verify', [EmailverificationController::class, 'verify'])->name('verification.notice');
    Route::post('/email/verify-with-code', [EmailverificationController::class, 'verifyWithCode'])->name('verification.verify.code');
    // Route::get('/email/verify/{id}/{hash}', [EmailverificationController::class, 'verifyMail'])->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailverificationController::class, 'resend'])->middleware(['throttle:6,1'])->name('verification.send');
// });

Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/text', [App\Http\Controllers\HomeController::class, 'index'])->name('test');
    Route::get('/screener', [FrontendController::class, 'screener'])->name('screener');
    Route::get('/alert', [FrontendController::class, 'alert'])->name('alert');
    Route::get('/overview', [FrontendController::class, 'overview'])->name('overview');
    Route::get('/user/alert', [FrontendController::class, 'user_alert'])->name('user.lert');

    Route::post('/store/alert', [AlertController::class, 'store'])->name('alert.store');
    Route::put('/update/alert/{alert}', [AlertController::class, 'update'])->name('alert.update');
    Route::delete('/delete/alert/{alert}', [AlertController::class, 'destroy'])->name('alert.destroy');
});

Route::get('/test', [App\Http\Controllers\FrontendController::class, 'test']);
