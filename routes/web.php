<?php

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events', [EventController::class, 'store']);

Route::get('/contact', function() {
    return view('contact');
});
