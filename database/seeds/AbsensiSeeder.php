<?php

use App\Absensi;
use Illuminate\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'student_id' => 1,
                'user_id' => 2,
                'tanggal_absen' => date('Y-m-d'),
                'keterangan' => 'H',
            ],
            [
                'student_id' => 2,
                'user_id' => 2,
                'tanggal_absen' => date('Y-m-d'),
                'keterangan' => 'H',
            ],
            [
                'student_id' => 3,
                'user_id' => 2,
                'tanggal_absen' => date('Y-m-d'),
                'keterangan' => 'H',
            ],
            [
                'student_id' => 4,
                'user_id' => 3,
                'tanggal_absen' => date('Y-m-d'),
                'keterangan' => 'S',
            ]
        );

        foreach ($data as $a) {
            Absensi::create($a);
        }
    }
}
