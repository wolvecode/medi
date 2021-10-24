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
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
            'name' => 'biodun habeeb',
            'email' => 'azeezbiodun14@yahoo.com',
            'phone' => '08027983782',
            'address' => '19, odjs,aj, sksks ',
            'password' => Hash::make('password'), // password
        ]);
    }
}
