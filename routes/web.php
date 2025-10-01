<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/friends', [FriendController::class, 'index'])->name('foldertest.index');
Route::get('/friends/create', [FriendController::class, 'create'])->name('foldertest.create');
Route::get('/friends/{id}', [FriendController::class, 'show'])->name('foldertest.show');