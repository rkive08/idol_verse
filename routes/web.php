<?php

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/agency', [App\Http\Controllers\AgencyController::class, 'index'])->name('agency');
    Route::get('/agency/create', [App\Http\Controllers\AgencyController::class, 'create'])->name('agency.create');
    Route::post('/agency', [App\Http\Controllers\AgencyController::class, 'store'])->name('agency.store');
    Route::get('/agency/{id}', [App\Http\Controllers\AgencyController::class, 'edit'])->name('agency.edit');
    Route::put('/agency/{id}/edit', [App\Http\Controllers\AgencyController::class, 'update'])->name('agency.update');
    Route::delete('/agency/{id}', [App\Http\Controllers\AgencyController::class, 'destroy'])->name('agency.destroy');

    Route::get('/merchandise', [App\Http\Controllers\MerchandiseController::class, 'index'])->name('merch');
});
