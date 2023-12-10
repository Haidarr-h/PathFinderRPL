<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;


//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/ayen', function () {
    return view('x');
});

// ! ==============MAHASISWA===============
// ! CAREERPATH MAHASISWA
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);
// ! INTERNSHIP FINDER
Route::get('/internshipfinder', [MahasiswaController::class, 'showInternshipFinder']);
// ! COURSE FINDER
Route::get('/coursefinder', [MahasiswaController::class, 'showCourseFinder']);


// ! ==============ADMIN===============
// ! COURSE FINDER ADMIN
Route::get('/courseFinderAdmin', [AdminController::class, 'showCourseFinder']); //* PENDING UPDATE



