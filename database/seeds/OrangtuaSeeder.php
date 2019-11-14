<?php

use App\Orangtua;
use Illuminate\Database\Seeder;

class OrangtuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['user_id' => '5'],
            ['user_id' => '5'],
            ['user_id' => '5'],
            ['user_id' => '5'],
            ['user_id' => '5'],
        );

        foreach ($data as $a) {
            Orangtua::create($a);
        }
    }
}
