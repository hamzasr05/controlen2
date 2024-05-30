<?php

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternauteController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HotelController;
Route::resource('internautes', InternauteController::class);
Route::get('/internautes', [InternauteController::class, 'index'])->name('internautes.index');
Route::get('/internautes/create', [InternauteController::class, 'create'])->name('internautes.create');
Route::post('/internautes', [InternauteController::class, 'store'])->name('internautes.store');
Route::get('/internautes/{internaute}', [InternauteController::class, 'show'])->name('internautes.show');
Route::get('/internautes/{internaute}/edit', [InternauteController::class, 'edit'])->name('internautes.edit');
Route::put('/internautes/{internaute}', [InternauteController::class, 'update'])->name('internautes.update');
Route::delete('/internautes/{internaute}', [InternauteController::class, 'destroy'])->name('internautes.destroy');

Route::resource('reservations', ReservationController::class);
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');


Route::resource('hotels', HotelController::class);
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');
Route::post('/hotels', [HotelController::class, 'store'])->name('hotels.store');
Route::get('/hotels/{hotel}', [HotelController::class, 'show'])->name('hotels.show');
Route::get('/hotels/{hotel}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
Route::put('/hotels/{hotel}', [HotelController::class, 'update'])->name('hotels.update');
Route::delete('/hotels/{hotel}', [HotelController::class, 'destroy'])->name('hotels.destroy');


Route::get('/', function () {
    return view('welcome');
});
