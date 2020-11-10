<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $num) {
            DB::table('tasks')->insert([
                'date_key' => Carbon::now(),
                'title' => "サンプル",
                'status' => $num,
                'description' => "うまくいったか？",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        
    }
}
