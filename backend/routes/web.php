<?php

use App\Http\Controllers\RecursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

Route::controller(RecursoController::class)->group(function() {
    Route::get('/recursos', 'index');
    Route::post('/recursos', 'store');
});