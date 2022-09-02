<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'class_id' => 1,
            'username' => Str::random(10),
            'password' => Hash::make('siswa'),
            'email' => 'siswa@gmail.com',
            'fullname' => Str::random(10),
        ]);
    }
}
