<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Events\EventsController;
use App\Http\Controllers\Events\BookingController;
use App\Http\Controllers\Admin\ManageEventController;

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

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::controller(EventsController::class)
    ->group(function () {
        Route::name('front.')->group(function () {
            Route::middleware(['auth', 'isOrganisator'])->group(function () {
                Route::get('/event/create', 'create')->name('event.create');
                Route::post('/store', 'store')->name('save');
            });
            Route::get('/event/{event:slug}', 'show')->name('event.show');
            Route::post('/search', 'search')->name('search');

            Route::middleware(['auth', 'isParticipant'])->group(function () {

                Route::get('/booking/{event}', [BookingController::class, 'index'])->name('booking.event');
                Route::view('/booking/confirmed', 'front.events.bookingConfirmed')->name('bookingConfirmed');
            });
        });
        Route::get('/', 'index')->name('welcome');
    });
Route::view('/faq', 'front.events.faq')->name('faq');
Route::view('/contact-us', 'front.events.contact')->name('contact');

// -----------------------------------------------------------------------------

// BACK OFFICE
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/faq', 'front.events.faq')->name('faq');
Route::name('admin.')->prefix('admin')->group(function () {
    Route::controller(UserController::class)
        ->group(function () {
            Route::get('/users', 'index')->name('users');
            // Route::get('status/{user:id}',  'UpdateStatus')->name('users.status');
        });

    Route::middleware('auth')->controller(ManageEventController::class)
        ->group(function () {
            Route::get('/events', 'index')->name('events.index');
            Route::get('status/{event:id}', 'updateStatus')->name('events.status');
            Route::delete('/events/destroy/{id}', 'destroy')->name('events.destroy');
        });
});


Route::controller(StripeController::class)->group(function () {
    Route::get('create/stripe', 'checkout')->name('stripe.view');
    Route::post('stripe', 'after')->name('stripe.post');
});

require __DIR__ . '/auth.php';
