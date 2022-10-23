<?php

use App\Http\Controllers\RiskController;
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
Route::get('/', [RiskController::class, 'index'])->name('risks.index');
Route::post('/', [RiskController::class, 'store'])->name('risks.store');;
