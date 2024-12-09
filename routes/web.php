<?php

use App\Http\Controllers\mahasiswacontroller;
use Illuminate\Support\Facades\Route;

Route::resource('mahasiswa', mahasiswacontroller::class);
