<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Gustavo Telles',
                'email' => 'gustavo.telles@gmail.com',
                'password' => bcrypt('password'),
            ]
    ]);
    }
}
