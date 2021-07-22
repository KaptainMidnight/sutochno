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

Route::get('/facilities', \App\Http\Livewire\FacilityController::class);
Route::get('/facility/{facility}', \App\Http\Livewire\FacilityShowController::class)->name('facility.show');
