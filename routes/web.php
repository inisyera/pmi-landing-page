<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\JadwalDonorDarah;
use App\Models\StockDarah;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    $dataJadwal = JadwalDonorDarah::all(); // Ambil semua data dari tabel jadwal_donor_darahs
    $dataStock = StockDarah::all(); // Ambil semua data dari tabel stok darah
    return view('welcome', compact('dataJadwal', 'dataStock')); // Kirim ke welcome.blade.php
});



require __DIR__.'/auth.php';
