<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // User 3
        DB::table('users')->insert([
            'name' => 'Admin 3',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
