<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;
use App\Angkatan;
use App\Student;

class PiketKurikulumController extends Controller
{
    public function index()
    {
        $absensis = Absensi::all();
        $angkatans = Angkatan::all();

        return view('piket_kurikulum.index', compact('absensis', 'angkatans'));
    }

    public function daftarSiswa()
    {
        $students = Student::all();
        $angkatans = Angkatan::all();

        // $arrAngkatan = [];
        // foreach ($angkatans as $angkatan) {
        //     foreach ($students as $student) {
        //         if ($student->rombel->angkatan->angkatan == $angkatan->angkatan) {
        //             $arrAngkatan['angkatan'][$angkatan->angkatan][] = $student->rombel->angkatan->angkatan;
        //         }
        //     }
        // }

        // dd($arrAngkatan);
        
        $kelasX = ['male' => [], 'female' => [], 'jumlah' => []];
        $kelasXI = ['male' => [], 'female' => [], 'jumlah' => []];
        $kelasXII = ['male' => [], 'female' => [], 'jumlah' => []];
        foreach ($students as $student) {
            $studentAngkatan = $student->rombel->angkatan->angkatan; 
            if ($studentAngkatan == 'X') {
                $kelasX['jumlah'][] = $studentAngkatan;
                if ($student->jk == 'L') {
                    $kelasX['male'][] = $student->jk;
                } elseif ($student->jk == 'P'){
                    $kelasX['female'][] = $student->jk;
                }
            } elseif ($studentAngkatan == 'XI'){
                $kelasXI['jumlah'][] = $studentAngkatan;
                if ($student->jk == 'L') {
                    $kelasXI['male'][] = $student->jk;
                } elseif ($student->jk == 'P'){
                    $kelasXI['female'][] = $student->jk;
                }
            } elseif ($studentAngkatan == 'XII'){
                $kelasXII['jumlah'][] = $studentAngkatan;
                if ($student->jk == 'L') {
                    $kelasXII['male'][] = $student->jk;
                } elseif ($student->jk == 'P'){
                    $kelasXII['female'][] = $student->jk;
                }
            }
        }

        return view('piket_kurikulum.daftar_siswa', compact('kelasX', 'kelasXI', 'kelasXII', 'students'));
    }
}
