<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/dashboard', Dashboard::class)->name('dashboard');
