<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Angkatan;
use App\Orangtua;
use App\Rombel;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $absensis = Absensi::all();
        $angkatans = Angkatan::all();

        return view('guru.index', compact('angkatans', 'absensis'));
    }
}
