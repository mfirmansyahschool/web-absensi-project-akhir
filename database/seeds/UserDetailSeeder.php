<?php

use App\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
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
                'user_id' => '1',
                'nama' => 'Piket',
                'email' => 'piket@gmail.com',
                'no_telp' => '081234567890'
            ],
            [
                'user_id' => '2',
                'nama' => 'Guru',
                'email' => 'guru@gmail.com',
                'no_telp' => '081234874875'
            ],
            [
                'user_id' => '3',
                'nama' => 'Pembimbing Rayon',
                'email' => 'pemb_rayon@gmail.com',
                'no_telp' => '081289734873'
            ],
            [
                'user_id' => '4',
                'nama' => 'Kaprog',
                'email' => 'kaprog@gmail.com',
                'no_telp' => '082398387458'
            ],
            [
                'user_id' => '5',
                'nama' => 'Orangtua',
                'email' => 'orangtua@gmail.com',
                'no_telp' => '089384938493'
            ]
        );

        foreach ($data as $a) {
            UserDetail::create($a);
        }
    }
}
