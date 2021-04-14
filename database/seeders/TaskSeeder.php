<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name'          => "Task 1",
            'isCompleted'   => 1,
        ]);

        DB::table('tasks')->insert([
            'name'          => "Task 2",
            'isCompleted'   => 1,
        ]);


        DB::table('tasks')->insert([
            'name'          => "Task 3",
            'isCompleted'   => 0,
        ]);
    }
}
