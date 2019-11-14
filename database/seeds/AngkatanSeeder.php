<?php

use App\Angkatan;
use Illuminate\Database\Seeder;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'angkatan' => 'X'
            ],
            [
                'angkatan' => 'XI'
            ],
            [
                'angkatan' => 'XII'
            ],
        ];

        foreach ($data as $a) {
            Angkatan::create($a);
        }
    }
}
