<?php

namespace App\Http\Controllers;

use App\Models\internship;
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
        $internship = internship::all();
        return view('Mahasiswa.internshipfinder', compact('internship'));
    }
}
