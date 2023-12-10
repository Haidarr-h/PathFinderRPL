<?php

namespace App\Http\Controllers;

use App\Models\magang;
use App\Models\kursus;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function showCareerPath()
    {
        return view('Mahasiswa.CareerPath');
    }

    public function showAyen()
    {
        return view('x');
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


