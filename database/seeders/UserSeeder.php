<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get(database_path('seeders/data.json'));
        $users=collect(json_decode($json, true));

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'age' => $user['age'],
                'city' => $user['city'],
            ]);
        }

        // You can also call other seeders here if needed
        // $this->call([
        //     OtherSeeder::class,
        // ]);
    }
};
