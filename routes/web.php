<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SidebarController;
Route::resource("/projets", ProjetController::class);

// Route for the sidebar
Route::get('/sidebar', [SidebarController::class, 'index'])->name('sidebar.index');
