<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'admin',
            'name' => 'jenny kim',
            'email'=> 'jenny@gmail.com',
            'password'=> Hash::make('admin'),
    }
}
