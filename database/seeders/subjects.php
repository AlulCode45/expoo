<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class subjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            [
                [
                    'class_id' =>  1,
                    'subjects_name' => 'Bahasa Indonesia',
                    'teacher_id' => 1,
                ],
                [
                    'class_id' =>  1,
                    'subjects_name' => 'Bahasa Arab',
                    'teacher_id' => 1,
                ],
                [
                    'class_id' =>  1,
                    'subjects_name' => 'Bahasa Ibrani',
                    'teacher_id' => 1,
                ],
                [
                    'class_id' =>  1,
                    'subjects_name' => 'Bahasa Inggris',
                    'teacher_id' => 1,
                ]
            ],
        );
    }
}
