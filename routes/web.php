<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\HandleClub;
use App\Http\Livewire\ShowQueue;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/queue', ShowQueue::class)->middleware(['auth', 'role:presenter|viewer'])->name('queue');
Route::get('/leaderboard', ShowQueue::class)->middleware(['auth', 'role:presenter|viewer'])->name('leaderboard');
Route::get('/queue/{club}', HandleClub::class)->middleware(['auth', 'role:presenter'])->name('club');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
