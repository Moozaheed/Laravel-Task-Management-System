<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Uncomment the line below if you want to seed the 'users' table
        // \App\Models\User::factory(10)->create();

        // Create 20 instances of the 'Task' model using the factory
        \App\Models\Task::factory(20)->create();

        // Call the TaskSeeder class
        $this->call(TaskSeeder::class);
    }
}
