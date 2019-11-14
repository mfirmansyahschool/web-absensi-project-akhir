<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [ 'username' => 'piket', 'password' => Hash::make('piketpiket'), 'action_id' => 1],
            [ 'username' => 'guru', 'password' => Hash::make('guruguru'), 'action_id' => 2],
            [ 'username' => 'pemb_rayon', 'password' => Hash::make('pemb_rayon'), 'action_id' => 3],
            [ 'username' => 'kaprog', 'password' => Hash::make('kaprog_kaprog'), 'action_id' => 4],
            [ 'username' => 'orangtua', 'password' => Hash::make('orangtuaorangtua'), 'action_id' => 5],
        );

        foreach ($data as $a) {
            User::create($a);
        }
    }
}
