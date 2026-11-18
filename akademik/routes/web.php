<?php

use Illuminate\Support\Facades\Route;

// Import Controller yang sudah dibuat
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AuthController;

// Menghubungkan Route dengan Method spesifik di Controller biasa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

//Menghubungkan Route dengan Resource Controller (Otomatis membuat 7 rute CRUD)
// Route::resource('/dosen', DosenController::class);

// Route Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Register Baru
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

// ROUTE YANG DILINDUNGI (Harus Login Dulu)
Route::middleware(['auth'])->group(function () {
    // CRUD Mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class);
    
    // Dosen & Matakuliah
    Route::get('/dosen', [DosenController::class, 'index']);
    Route::get('/matakuliah', [MatakuliahController::class, 'index']);
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return "Halaman Utama Akademik";
// });

// Route::get('/mahasiswa/{nama}', function ($nama) {
// return "Nama Mahasiswa: " . $nama;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return "Dashboard Admin";
// });

// Route::resource('mahasiswa', MahasiswaController::class);
// Route::resource('dosen', DosenController::class);

// // Route untuk Sistem Informasi Akademik
// Route::get('/mahasiswa', function () {
//     return '<h1>Halaman Mahasiswa</h1>';
// });

// Route::get('/dosen', function () {
//     return '<h1>Halaman Dosen</h1>';
// });

// Route::get('/matakuliah', function () {
//     return '<h1>Halaman Mata Kuliah</h1>';
// });

// Route::get('/kelas', function () {
//     return '<h1>Halaman Kelas</h1>';
// });