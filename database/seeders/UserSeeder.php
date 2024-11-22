<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'created_at' => Carbon::now()->subYears(3),
                'updated_at' => Carbon::now()->subYears(3),
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@example.com',
                'role' => 'teacher',
                'created_at' => Carbon::now()->subYears(3),
                'updated_at' => Carbon::now()->subYears(3),
            ],
            [
                'name' => 'student',
                'email' => 'student@example.com',
                'role' => 'student',
                'created_at' => Carbon::now()->subYears(3),
                'updated_at' => Carbon::now()->subYears(3),
            ],
            [
                'name' => 'student 2',
                'email' => 'studen2t@example.com',
                'role' => 'student',
                'created_at' => Carbon::now()->subYears(3),
                'updated_at' => Carbon::now()->subYears(3),
            ],
            [
                'name' => 'student 3',
                'email' => 'student3@example.com',
                'role' => 'student',
                'created_at' => Carbon::now()->subYears(3),
                'updated_at' => Carbon::now()->subYears(3),
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
