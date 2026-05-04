<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    //for index
        Route::get('/ideas', [IdeaController::class, 'index']);
    //create
        Route::get('/ideas/create', [IdeaController::class, 'create']);
    //store
        Route::post('/ideas', [IdeaController::class, 'store']);
    //show
        Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    //edit
        Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    //update
        Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
    //destroy
        Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

    Route::delete('/logout', [SessionsController::class, 'destroy']);

});

Route::middleware('guest')->group(function () {
    //register
        Route::get('/register', [RegisteredUserController::class, 'create']);
        Route::post('/register', [RegisteredUserController::class, 'store']);

    // login
        Route::get('/login', [SessionsController::class, 'create'])->name('login');
        Route::post('/login', [SessionsController::class, 'store']);
});

