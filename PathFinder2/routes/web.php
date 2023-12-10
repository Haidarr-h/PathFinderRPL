<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kursusController;
use App\Http\Controllers\magangController;



//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');


Route::get('/', [AdminController::class, 'showCareerPath']); //* DEFAULT


// ! ==============MAHASISWA===============
// ! CAREERPATH MAHASISWA
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);
Route::get('/CareerPath/kontenMHS/{namaKarir}/{idKarir}', [MahasiswaController::class, 'kontenMHSCareerPath'])->name('kontenKarirMHS');


// ! INTERNSHIP FINDER
Route::get('/internshipfinder', [MahasiswaController::class, 'showInternshipFinder']);
// ! COURSE FINDER
Route::get('/coursefinder', [MahasiswaController::class, 'showCourseFinder']);


// ! ==============ADMIN===============
// ! COURSE FINDER ADMIN
Route::get('/courseFinderAdmin', [AdminController::class, 'showCourseFinder']); //* PENDING UPDATE
Route::get('/createCourseFinder', [AdminController::class, 'createCourseFinder']);

// ! CAREERPATH ADMIN
Route::get('/careerPathAdmin', [AdminController::class, 'showCareerPath']); //* DEFAULT
Route::get('/CareerPath/CreateForm', [AdminController::class, 'createCareerPath']); //form createnya saja
// *CRUD create karir
Route::get('/CareerPath/Create', [AdminController::class, 'createKarir'])->name('tambahKarir');


Route::resource('magang', magangController::class);




