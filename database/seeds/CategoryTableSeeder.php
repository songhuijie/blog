<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            [
                'cate_name' => 'php',
                'cate_id' => 1,
                'pid' => 0,
            ],
            [
                'cate_name' => 'java',
                'cate_id' => 2,
                'pid' => 0,
            ],
            [
                'cate_name' => 'python',
                'cate_id' => 3,
                'pid' => 0,
            ],
            [
                'cate_name' => 'c',
                'cate_id' => 4,
                'pid' => 0,
            ],
            [
                'cate_name' => 'laravel',
                'cate_id' => 5,
                'pid' => 1,
            ],
            [
                'cate_name' => 'thinkphp',
                'cate_id' => 6,
                'pid' => 1,
            ],

        ]);

    }
}
