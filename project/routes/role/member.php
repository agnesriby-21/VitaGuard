<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:member'])->group(function () {
    #region API ROUTES (TEMPORARY)    
    Route::get('/chat', [ChatController::class, 'index'])->name('member.chat');
    #endregion
});