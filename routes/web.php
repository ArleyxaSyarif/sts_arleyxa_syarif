<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('/admin.index');
});
Route::get('/admin/create', function () {
    return view('/admin.create');
});






// Route::get('/jurusan', function () {
//     return view('/jurusan.index');
// });

route::resource('/siswa', SiswaController::class);






//controller jurusan
route::resource('/jurusan', JurusanController::class);

// route::resource('/admin.create', JurusanController::class);

