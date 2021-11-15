<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => 'kuning',
            'create_at' => date('Y-d-m H:i:s'),
            'update_at' => date('Y-d-m H:i:s')
        ]);
    }
}
