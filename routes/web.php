<?php

use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController as EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\MyEventsController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    Route::get('/dashboard', function () {
        //debug(auth()->user()->role);
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/events',  AdminEventController::class)->only([
        'index', 'create', 'edit', 'destroy'
    ]);

        Route::resource('/category', AdminCategoryController::class)
            ->only([
            'index', 'create', 'edit', 'destroy'
        ]);


    Route::get('/reservations', [AdminReservationController::class, 'index'])
        ->name('reservation.index');


    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])
        ->name('user.index');
});




Route::get('events', [EventController::class, 'index'])
    ->name('event.index');


Route::get('event/{event}', [EventController::class, 'show'])
    ->name('event.show');


Route::get('reserve/{event}', [EventController::class, 'reservation'])
    ->middleware(['auth:sanctum', config('jetstream.auth_session')])
    ->name('event.reservation');

Route::get('/myevents', MyEventsController::class)->name('myevents');

Route::get('/past-events', [HomeController::class, 'pastEvents'])->name('past-events');

Route::get('/', HomeController::class)->name('home');
