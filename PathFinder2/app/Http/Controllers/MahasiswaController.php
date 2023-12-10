<?php

namespace App\Http\Controllers;

use App\Models\magang;
use App\Models\kursus;
use Illuminate\Http\Request;
use App\Models\career;

class MahasiswaController extends Controller
{
    public function showCareerPath()
    {
        $careers = Career::all();

        return view('Mahasiswa.CareerPath', compact('careers'));
    }

    public function kontenMHSCareerPath($namaKarir, $idKarir)
    {
        $careers = Career::all();

        return view('Mahasiswa.CareerPathKontenMahasiswa', compact('careers', 'idKarir', 'namaKarir'));
    }

  

    public function showInternshipFinder() {
        $internship = magang::all();
        return view('Mahasiswa.internshipfinder', compact('internship'));
    }

    public function showCourseFinder() {
        $course = kursus::all();
        return view('Mahasiswa.coursefinder', compact('course'));
    }
}


