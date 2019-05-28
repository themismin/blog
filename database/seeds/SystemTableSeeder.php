<?php

use Illuminate\Database\Seeder;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systems = [
            ['key' => 'blog_name', 'value' => '小敏的博客'],
            ['key' => 'motto', '小敏的博客']
        ];
        DB::table('systems')->insert($systems);
    }
}
