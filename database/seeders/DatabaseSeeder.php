<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(10)->create();
        User::factory(10)->create();
        // Create 10 student records using the factory
        // $this->call([
        //             StudentSeeder::class,
        //             // Add other seeders here if needed
        //         ]);
    }
}
