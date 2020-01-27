<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(ActionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrangtuaSeeder::class);
        $this->call(AngkatanSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(RayonSeeder::class);
        $this->call(RombelSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(AbsensiSeeder::class);
        $this->call(UserDetailSeeder::class);
    }
}
