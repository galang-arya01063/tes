<?php

use Carbon\Factory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderController;

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

Route::get('/armada', [ArmadaController::class, 'index']);
Route::get('/driver', [DriverController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/armada/create', [ArmadaController::class, 'create']);
Route::get('/driver/create', [DriverController::class, 'create']);
Route::post('/armada', [ArmadaController::class, 'store'])->name('armada.store');
Route::get('/armada/{id}/edit', [ArmadaController::class, 'edit'])->name('armada.edit');
Route::put('/armada/{id}', [ArmadaController::class, 'update'])->name('armada.update');
Route::delete('/armada/{id}', [ArmadaController::class, 'destroy'])->name('armada.destroy');

Route::post('/driver', [DriverController::class, 'store'])->name('driver.store');
Route::put('/driver/{id}', [DriverController::class, 'update'])->name('driver.update');
Route::delete('/driver/{id}', [DriverController::class, 'destroy'])->name('driver.destroy');
Route::get('/driver/{id}/edit', [DriverController::class, 'edit'])->name('driver.edit');
Route::resource('driver', DriverController::class);

