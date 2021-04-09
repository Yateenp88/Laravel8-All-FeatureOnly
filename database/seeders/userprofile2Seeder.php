<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class userprofile2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('userprofile2')->insert(
            [
                'name' => Str::random(10),
                'created_at' => '2021-04-08 15:59:35',
                'updated_at' => '2021-04-08 15:59:35'
            ],
            [
                'name' => Str::random(10),
                'created_at' => '2021-04-08 15:59:35',
                'updated_at' => '2021-04-08 15:59:35'
            ]
        );
    }
}
