<?php

use App\Rombel;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
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
                'angkatan_id' => 1,
                'rombel' => 'RPL X-1',
                'jurusan_id' => '1'
            ],
            [
                'angkatan_id' => 1,
                'rombel' => 'RPL X-2',
                'jurusan_id' => '1'
            ],
            [
                'angkatan_id' => 1,
                'rombel' => 'TKJ X-1',
                'jurusan_id' => '2'
            ],
            [
                'angkatan_id' => 1,
                'rombel' => 'TKJ X-2',
                'jurusan_id' => '2'
            ],
            [
                'angkatan_id' => 1,
                'rombel' => 'OTKP X-1',
                'jurusan_id' => '3'
            ],
        );

        foreach ($data as $a) {
            Rombel::create($a);
        }
    }
}
