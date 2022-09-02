<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert(
            [
                'class_name' => 'X RPL 1',
            ],
            [
                'class_name' => 'X RPL 2',
            ],
            [
                'class_name' => 'X RPL 4',
            ],
            [
                'class_name' => 'XI RPL 1',
            ],
            [
                'class_name' => 'XI RPL 2',
            ],
            [
                'class_name' => 'XI RPL 3',
            ],
        );
    }
}
