<?php

namespace App\Http\Controllers;

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
}
