<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // for Admin
            [

                'name' => 'Admin',
                'username' => 'adminn',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('777'),
                'role' => 'admin',
                'status' => 'active',


            ],

            // for Agent
            [

                'name' => 'Agent',
                'username' => 'agentt',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('777'),
                'role' => 'agent',
                'status' => 'active',


            ],

            // for User
            [

                'name' => 'User',
                'username' => 'usern',
                'email' => 'user@gmail.com',
                'password' => Hash::make('777'),
                'role' => 'user',
                'status' => 'active',
            ],

            ]);
    }
}
