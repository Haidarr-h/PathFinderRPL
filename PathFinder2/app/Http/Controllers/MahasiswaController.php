<?php

namespace App\Http\Controllers;

use App\Models\magang;
use App\Models\kursus;
use Illuminate\Http\Request;
use App\Models\career;

class MahasiswaController extends Controller
{
    public function showCareerPath($namePengguna)
    {
        $careers = Career::all();

        return view('Mahasiswa.CareerPath', compact('careers', 'namePengguna'));
    }

    public function kontenMHSCareerPath($namaKarir, $idKarir)
    {
        $careers = Career::all();

        return view('Mahasiswa.CareerPathKontenMahasiswa', compact('careers', 'idKarir', 'namaKarir'));
    }

  

    public function showInternshipFinder($namePengguna) {
        $internship = magang::all();
        return view('Mahasiswa.internshipfinder', compact('internship', 'namePengguna'));
    }

    public function showCourseFinder() {
        $course = kursus::all();
        return view('Mahasiswa.coursefinder', compact('course'));
    }

    public function showDataScienceIntern() {
        $internship = magang::all();
        return view('Mahasiswa.datascience', compact('internship'));
    }

    public function showInteractiveMediaIntern() {
        $internship = magang::all();
        return view('Mahasiswa.interactivemedia', compact('internship'));
    }
}


