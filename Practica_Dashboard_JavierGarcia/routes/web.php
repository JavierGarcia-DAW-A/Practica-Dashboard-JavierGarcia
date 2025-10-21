<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;
use App\Http\Controllers\MainController;

Route::get('/', [DashboardController::class, 'index'])->name('layout');
