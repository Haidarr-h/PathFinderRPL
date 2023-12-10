<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kursusController;
use App\Http\Controllers\SessionController;


//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');


Route::get('/', function () {
    return view('sesi.index');
});


// ! ==============MAHASISWA===============
// ! CAREERPATH MAHASISWA
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);


// ! ==============ADMIN===============
// ! COURSE FINDER ADMIN
Route::get('/courseFinderAdmin', [AdminController::class, 'showCourseFinder']); //* PENDING UPDATE
Route::get('/createCourseFinder', [AdminController::class, 'createCourseFinder']);

// ! CAREERPATH ADMIN
Route::get('/careerPathAdmin', [AdminController::class, 'showCareerPath']); //* DEFAULT
Route::get('/CareerPath/CreateForm', [AdminController::class, 'createCareerPath']); //form createnya saja
// *CRUD create karir
Route::post('/CareerPath/Create', [AdminController::class, 'createKarir'])->name('tambahKarir');

// ! LOGIN
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);

// Fitur Register
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

// Fitur Login
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);

// Fitur Logout
Route::get('/sesi/logout', [SessionController::class, 'logout']);




