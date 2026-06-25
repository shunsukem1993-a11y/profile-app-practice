<?php
use Illuminate\Support\Facades\ProfileController;
Route::get('/profile', [ProfileController::class, 'index']);