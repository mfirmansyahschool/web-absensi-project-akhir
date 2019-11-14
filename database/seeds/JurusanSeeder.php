<?php

use App\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
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
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'singkatan' => 'RPL',
                'kaprog_id' => 4
            ],
            [
                'jurusan' => 'Teknik Komputer Jaringan',
                'singkatan' => 'TKJ',
                'kaprog_id' => 4
            ],
            [
                'jurusan' => 'Otomatisasi Tata Kelola Perkantoran',
                'singkatan' => 'OTKP',
                'kaprog_id' => 4
            ]
        );

        foreach ($data as $a) {
            Jurusan::create($a);
        }
    }
}
