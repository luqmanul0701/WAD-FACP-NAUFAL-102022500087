<?php

use Illuminate\Support\Facades\Route;
// maksudnya ini adalah warisan dari App\Http\Controllers\ArmadaController
use App\Http\Controllers\ArmadaController;

// untuk direct ke halaman utama yang menampilkan data table
Route::get('/', function () {
    return redirect('/armada');
});

// tampilan awal ketika akses web
Route::get('/armada', [ArmadaController::class, 'tampilan']);

// menampilkan halaman create
Route::get('/armada/create', [ArmadaController::class, 'create']);

// menyimpan data baru ke database
// store adalah fungsi bawaan ketika user menenak tombol simpan yg dimana menggunakan metode post
Route::post('/armada', [ArmadaController::class, 'store']);

// menampilkan form edit data berdasarkan id atau data yg ingin dirubah
Route::get('/armada/{id}/edit', [ArmadaController::class, 'edit']);

// menyimpan perubahan data ke database
// put itu method bawaan untuk update data
// laravel akan memanggil fungsi update untuk menyimpan hasil edit
Route::put('/armada/{id}', [ArmadaController::class, 'update']);

// menghapus data
Route::delete('/armada/{id}', [ArmadaController::class, 'destroy']);
