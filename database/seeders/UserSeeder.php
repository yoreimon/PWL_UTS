<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'josafat',
            'name' => 'Josafat Pratama Susilo',
            'email' => 'josafatpratama@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'username' => 'alfino',
            'name' => 'Alfino Febry Krissaputra',
            'email' => 'alfinofebry@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}