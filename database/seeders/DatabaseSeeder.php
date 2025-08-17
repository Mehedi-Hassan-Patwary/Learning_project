<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        student::factory(10)->create(); // Create 10 student records using the factory
        // $this->call([
        //             StudentSeeder::class,
        //             // Add other seeders here if needed
        //         ]);
    }
}
