<?php

use App\Action;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
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
                'action' => 'Piket atau Kurikulum'
            ],
            [
                'action' => 'Guru'
            ],
            [
                'action' => 'Pembimbing Rayon'
            ],
            [
                'action' => 'Kaprog atau Laboran'
            ],
            [
                'action' => 'Orangtua'
            ]
        );

        foreach ($data as $a) {
            Action::create($a);
        }
    }
}
