<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfluenceurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
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

Route::get('/',[DashboardController::class , "index" ])->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {


    Route::get('/influenceur/{id}', [InfluenceurController::class, 'index'])->name('influenceur.index');

    Route::get('/vote/{id}', [VoteController::class, 'index'])->name('vote.index');
    Route::post('/vote/{id}', [VoteController::class, 'store'])->name('vote.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
