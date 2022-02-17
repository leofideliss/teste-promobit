<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
            'created_at' => '2020-12-31 23:59:59',
            'updated_at' => '2020-12-31 23:59:59',
      
        ]);
    }
}
