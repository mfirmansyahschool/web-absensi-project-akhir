<?php

use App\Rayon;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
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
                'rayon' => 'Cicurug 1',
                'pembimbing_id' => '1'
            ],
            [
                'rayon' => 'Cicurug 2',
                'pembimbing_id' => '1'
            ],
            [
                'rayon' => 'Cicurug 3',
                'pembimbing_id' => '1'
            ],
            [
                'rayon' => 'Cicurug 4',
                'pembimbing_id' => '1'
            ],
            [
                'rayon' => 'Cicurug 5',
                'pembimbing_id' => '1'
            ]
        );

        foreach ($data as $a) {
            Rayon::create($a);
        }
    }
}
