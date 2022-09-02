<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
                [
                    'subjects_id' =>  1,
                    'title' => 'Menangkap Capung',
                    'body' => 'Tangkaplah capung hidup-hidup, tanpa melukainya',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 2,
                    'title' => 'Menangkap Capung',
                    'body' => 'Tangkaplah capung hidup-hidup, tanpa melukainya',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 3,
                    'title' => 'Menangkap Capung',
                    'body' => 'Tangkaplah capung hidup-hidup, tanpa melukainya',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 4,
                    'title' => 'Menangkap Capung',
                    'body' => 'Tangkaplah capung hidup-hidup, tanpa melukainya',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' =>  1,
                    'title' => 'Membuat Tiramisu',
                    'body' => 'Buatlah Tiramisu tanpa menggunakan keju',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 2,
                    'title' => 'Membuat Tiramisu',
                    'body' => 'Buatlah Tiramisu tanpa menggunakan keju',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 3,
                    'title' => 'Membuat Tiramisu',
                    'body' => 'Buatlah Tiramisu tanpa menggunakan keju',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 4,
                    'title' => 'Membuat Tiramisu',
                    'body' => 'Buatlah Tiramisu tanpa menggunakan keju',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' =>  1,
                    'title' => 'Teater Kisah Nabi Nuh',
                    'body' => 'Bawalah kapal nabi Nuh dan siapkan pemeran cosplay Firaun',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 2,
                    'title' => 'Teater Kisah Nabi Nuh',
                    'body' => 'Bawalah kapal nabi Nuh dan siapkan pemeran cosplay Firaun',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 3,
                    'title' => 'Teater Kisah Nabi Nuh',
                    'body' => 'Bawalah kapal nabi Nuh dan siapkan pemeran cosplay Firaun',
                    'created_at' => new \DateTime()

                ],
                [
                    'subjects_id' => 4,
                    'title' => 'Teater Kisah Nabi Nuh',
                    'body' => 'Bawalah kapal nabi Nuh dan siapkan pemeran cosplay Firaun',
                    'created_at' => new \DateTime()

                ],
            ],
        );
    }
}
