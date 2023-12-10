<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kursusController;


//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');


Route::get('/', function () {
    return view('sesi.index');
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
Route::get('/createCourseFinder', [AdminController::class, 'createCourseFinder']);

// ! CAREERPATH ADMIN
Route::get('/careerPathAdmin', [AdminController::class, 'showCareerPath']); //* DEFAULT
Route::get('/CareerPath/CreateForm', [AdminController::class, 'createCareerPath']); //form createnya saja
// *CRUD create karir
Route::post('/CareerPath/Create', [AdminController::class, 'createKarir'])->name('tambahKarir');

Route::resource('kursus', kursusController::class);

Route::resource('magang', magangController::class);




