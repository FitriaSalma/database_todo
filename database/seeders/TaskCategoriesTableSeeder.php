<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_categories')->insert([
            'user_id' => 0,
            'color_id' => 0,
            'create_at' => date('Y-d-m H:i:s'),
            'update_at' => date('Y-d-m H:i:s')
        ]);
    }
}
