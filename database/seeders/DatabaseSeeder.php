<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'uid' => Str::uuid(),
            'email' => 'superadmin@gmail.com',
            'role_id' => 0,
            'password' => Hash::make('1234567890'),
        ]);
    }
}
