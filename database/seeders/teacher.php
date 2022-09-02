<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class teacher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
            [
                [
                    'username' =>  'BapakGuru',
                    'password' => Hash::make('guru'),
                    'email' =>  'guru1@gmail.com',
                    'fullname' =>  'Indra Maulana',
                    'is_teacher' => true,
                ],
                [
                    'username' =>  'IbuGuru',
                    'password' => Hash::make('guru'),
                    'email' =>  'guru2@gmail.com',
                    'fullname' =>  'Dinda Safitri',
                    'is_teacher' => true,
                ],
                [
                    'username' =>  'Tuan',
                    'password' => Hash::make('guru'),
                    'email' =>  'guru3@gmail.com',
                    'fullname' =>  'Edi Adriansyah',
                    'is_teacher' => true,
                ],
                [
                    'username' =>  'Puan',
                    'password' => Hash::make('guru'),
                    'email' =>  'guru4@gmail.com',
                    'fullname' =>  'Belinda Susanti',
                    'is_teacher' => true,
                ],
            ],
        );
    }
}
