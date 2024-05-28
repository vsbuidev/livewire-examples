<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/counter', function () {
//     return view('counter');
// });
