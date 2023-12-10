<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kursusController;
use App\Http\Controllers\magangController;
use App\Http\Controllers\SessionController;




//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');


Route::get('/', [SessionController::class, 'index']); //* LANDING PAGE

// login 
Route::get('/', [SessionController::class, 'index']); //* LANDING PAGE
Route::post('/sesi/login', [SessionController::class, 'login']); //*pencet button login


// ! ==============MAHASISWA===============
// ! CAREERPATH MAHASISWA
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);
Route::get('/CareerPath/kontenMHS/{namaKarir}/{idKarir}', [MahasiswaController::class, 'kontenMHSCareerPath'])->name('kontenKarirMHS');


// ! INTERNSHIP FINDER
Route::get('/internshipfinder', [MahasiswaController::class, 'showInternshipFinder']);

// ! COURSE FINDER
Route::get('/coursefinder', [MahasiswaController::class, 'showCourseFinder']); //*BELOMMM


// ! ==============ADMIN===============

// ! INTERNSHIP FINDER ADMIN
Route::resource('magang', magangController::class);

// ! COURSE FINDER ADMIN
Route::get('/courseFinderAdmi', [AdminController::class, 'showCourseFinder']); //* PENDING UPDATE
Route::get('/courseFinderAdmin', [kursusController::class, 'index']); //* PENDING UPDATE

Route::get('/createCourseFinder', [AdminController::class, 'createCourseFinder']);
Route::resource('kursus', kursusController::class);

// ! CAREERPATH ADMIN
Route::get('/careerPathAdmin', [AdminController::class, 'showCareerPath']); //* DEFAULT
Route::get('/CareerPath/CreateForm', [AdminController::class, 'createCareerPath']); //form createnya saja

// *CRUD karir
// konten karir
Route::get('/CareerPath/konten/{namaKarir}/{idKarir}', [AdminController::class, 'kontenKarir'])->name('kontenKarir');

// CREATE
Route::get('/CareerPath/Create', [AdminController::class, 'createKarir'])->name('tambahKarir');

// EDIT
Route::get('/CareerPath/edit/{idKarir}', [AdminController::class, 'editKarir'])->name('editKarir');

// DELETE
Route::get('/CareerPath/delete/{idKarir}', [AdminController::class, 'deleteKarir'])->name('deleteKarir');





