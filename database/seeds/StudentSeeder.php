<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
                'nis' => '11706170',
                'nisn' => '1234567890',
                'nama' => 'Ahmad Faturaahman',
                'jk' => 'L',
                'rombel_id' => 1,
                'rayon_id' => 1,
                'orangtua_id' => 1,
            ],
            [
                'nis' => '11809072',
                'nisn' => '0987654432',
                'nama' => 'Mutia Nur Angrek',
                'jk' => 'P',
                'rombel_id' => 4,
                'rayon_id' => 2,
                'orangtua_id' => 2,
            ],
            [
                'nis' => '11607384',
                'nisn' => '1102928938',
                'nama' => 'Raden Putra Solihin',
                'jk' => 'L',
                'rombel_id' => 3,
                'rayon_id' => 3,
                'orangtua_id' => 3,
            ],
            [
                'nis' => '11807384',
                'nisn' => '0020993849',
                'nama' => 'Sophianti Mutiara Mustika Dewi',
                'jk' => 'P',
                'rombel_id' => 3,
                'rayon_id' => 4,
                'orangtua_id' => 4,
            ],
            [
                'nis' => '11908899',
                'nisn' => '1029399933',
                'nama' => 'Hendro Prawira Subagjda',
                'jk' => 'L',
                'rombel_id' => 2,
                'rayon_id' => 5,
                'orangtua_id' => 5,
            ],
        );

        foreach ($data as $a) {
            Student::create($a);
        }
    }
}
