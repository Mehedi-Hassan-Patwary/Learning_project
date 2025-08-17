<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student; // Assuming the model is named 'Student' and located in app\Models

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students=collect(
[
            [
            'name' => 'Doe',
            'email' => 'doe@example.com'
            ],
            [
            'name' => 'mehedi',
            'email' => 'mehedi@example.com'
            ],
            [
            'name' => 'Hassan',
            'email' => 'hassan@example.com'
            ],
            [
            'name' => 'patwary',
            'email' => 'patwary@example.com'
            ],
            [
            'name' => 'rokib',
            'email' => 'rokib@example.com'
            ]
        ]
        );
        $students->each(function($student){
            student::insert($student);
        });


        // Student::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com'
        // ]); // You can add the necessary attributes here)
    }
}
