<?php

use App\Http\Controllers\SearchConsoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SidebarController;
Route::resource("/projets", ProjetController::class);

<<<<<<< HEAD



// Route to display the form
Route::get('/search-console/form', [SearchConsoleController::class, 'showForm'])->name('searchconsole.showForm');

// Route to fetch data from Google Search Console
Route::post('/search-console/fetch', [SearchConsoleController::class, 'fetchSearchConsoleData'])->name('searchconsole.fetchData');
=======
// Route for the sidebar
Route::get('/sidebar', [SidebarController::class, 'index'])->name('sidebar.index');
>>>>>>> d7200db97e2629043118d7a025ac567b99a66ea6
