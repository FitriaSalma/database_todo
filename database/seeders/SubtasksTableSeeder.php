<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubtasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtasks')->insert([
            'task_id' => 0,
            'name' => 'tugas',
            'is_complete' => false,
            'create_at' => date('Y-d-m H:i:s'),
            'update_at' => date('Y-d-m H:i:s')
        ]);
    }
}
