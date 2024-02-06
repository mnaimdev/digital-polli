<?php

use App\Http\Controllers\Admin\EventManagementController;
use App\Http\Controllers\EventFuckingController;
use Illuminate\Support\Facades\Route;

// add prefix as admin
Route::group(
    ['prefix' => 'event', 'as' => 'event.'],

    function () {
        Route::get('/', [EventManagementController::class, 'index'])->name('index');
        Route::get('/create', [EventManagementController::class, 'create'])->name('create');
        Route::post('/store', [EventManagementController::class, 'store'])->name('store');
        Route::get('/edit/{event}', [EventManagementController::class, 'edit'])->name('edit');
        Route::put('/update/{event}', [EventManagementController::class, 'update'])->name('update');

        Route::get('/destroy/{event}', [EventManagementController::class, 'destroy'])->name('destroy');
        Route::get('/show/{event}', [EventManagementController::class, 'show'])->name('show');
    }
);
