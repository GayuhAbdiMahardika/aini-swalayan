<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_user')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitranda',
                'email' => 'fitranda@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gayuh',
                'email' => 'gayuh@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'gudang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
