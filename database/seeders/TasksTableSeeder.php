<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'user_id' => 1,
            'description' => 'Sample task',
            'status' => false,
            'due_date' => now()->addDays(7),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
