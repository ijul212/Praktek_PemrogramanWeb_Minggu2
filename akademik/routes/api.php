<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/mahasiswa', [MahasiswaController::class, 'apiIndex']);

Route::get('/matakuliah', [MatakuliahController::class, 'apiIndex']);

