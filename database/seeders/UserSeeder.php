<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'userTypeID' => 1,
            'statusID' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
        ]);
    }
}
