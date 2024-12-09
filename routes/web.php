<?php

use App\Http\Controllers\mahasiswacontroller;
use Illuminate\Support\Facades\Route;

Route::get('mahasiswa', [mahasiswacontroller::class, 'index']);
