<?php

namespace App\Http\Controllers;

use App\Models\career;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // * COURSE FINDER
    public function showCourseFinder()
    {
        return view('Adminn.adminCourseFinder');

    }
    public function createCourseFinder()
    {
        return view('create');
    }

    // * CAREER PATH
    public function showCareerPath()
    {
        $careers = Career::all();

        return view('Adminn.adminCareerPath', compact('careers'));
    }

    public function createCareerPath()
    {
        return view('Adminn.careerPathCreate');
    }

    public function createKarir(Request $request)
    {
        $idKarir = $request->input('idKarir');
        $stream = $request->input('stream');
        $namaKarir = $request->input('namaKarir');
        $level1 = $request->input('level1');
        $level2 = $request->input('level2');
        $level3 = $request->input('level3');
        $level4 = $request->input('level4');
        $level5 = $request->input('level5');
        // Validasi data jika diperlukan

        // Simpan data anggota ke dalam database
        $member = new career();
        $member->idKarir = $idKarir;
        $member->stream = $stream;
        $member->namaKarir = $namaKarir;
        $member->level1 = $level1;
        $member->level2 = $level2;
        $member->level3 = $level3;
        $member->level4 = $level4;
        $member->level5 = $level5;
        $member->save();

        // Redirect kembali ke halaman yang sama
        return view('Adminn.adminCareerPath');

    }

  
}
