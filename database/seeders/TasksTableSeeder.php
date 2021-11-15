<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'user_id' => 0,
            'list_id' => 0,

            'name' => 'week8',
            'reminder_datetime' => date('Y-d-m H:i:s'),
            'due_date' => date('Y-d-m'),
            'attachment_url' => 'https://yaumi.moodlenesia.com/mod/assign/view.php?id=291',
            'note' => 'database design',

            'is_complete' => false,
            'is_my_day' => false,
            'create_at' => date('Y-d-m H:i:s'),
            'update_at' => date('Y-d-m H:i:s')
        ]);
    }
}
