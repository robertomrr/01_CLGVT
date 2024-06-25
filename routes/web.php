<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

/*
|----------------------------------------------------------------------------------
| Custom ROutes
|----------------------------------------------------------------------------------
*/
Route::get('endereco', function () { 
    return view('endereco');
});
Route::get('/endereco_index', [EnderecoController::class, 'index'])->name('endereco.index');
Route::post('/endereco_create', [EnderecoController::class, 'create'])->name('endereco.create');
Route::get('/endereco_store', [EnderecoController::class, 'store'])->name('endereco.store');
Route::post('/endereco_show/{id}', [EnderecoController::class, 'show'])->name('endereco.show');
Route::get('/endereco_edit/{id}', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::delete('/endereco_update/{id}', [EnderecoController::class, 'update'])->name('endereco_update');
Route::delete('/endereco_destroy/{id}', [EnderecoController::class, 'destroy'])->name('endereco_destroy');

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
