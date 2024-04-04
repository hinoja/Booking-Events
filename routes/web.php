<?php

use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Events\EventsController;

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

// FRONT OFFICE
Route::get('/', [EventsController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::name('front.')->group(function () {
    Route::view('/faq', 'front.events.faq')->name('faq');
    Route::get('/event/create', [EventsController::class, 'create'])->name('event.create');
    Route::get('/event/{Event:id}', [EventsController::class, 'show'])->name('event.show');
    Route::view('/contact-us', 'front.events.contact')->name('contact');
});

// -----------------------------------------------------------------------------

// BACK OFFICE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
