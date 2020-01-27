<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Angkatan;
use App\Orangtua;
use App\Rombel;
use App\Student;
use Illuminate\Http\Request;
use DB;

class GuruController extends Controller
{
    public function index()
    {
        $absensis = Absensi::all();
        $angkatans = Angkatan::all();

        $combines = DB::table('absensis')->join('students', 'absensis.id', '=', 'students.id')->join('rombels', 'students.rombel_id', '=', 'rombels.id')->join('angkatans', 'rombels.angkatan_id', '=', 'angkatans.id')->get();
        dd(Absensi::with('student')->join('students', 'students.id', '=', 'absensis.student_id')->get());

        // $datas = $absensis->load('student.rombel.angkatan');

        // $angkatanX = [];
        // $angkatanXI = [];
        // $angkatanXII = [];

        // foreach ($datas as $data) {
        //     if($data->student->rombel->angkatan->angkatan == 'X'){
        //         $angkatanX['checked'][] = $data;
        //     } elseif ($data->student->rombel->angkatan->angkatan == 'XI'){
        //         $angkatanXI['checked'][] = $data;
        //     } elseif ($data->student->rombel->angkatan->angkatan == 'XII'){
        //         $angkatanXII['checked'][] = $data;
        //     }
        // }

        // dd($angkatanX);

        return view('guru.index', compact('angkatans', 'absensis', 'datas'));
    }
}
