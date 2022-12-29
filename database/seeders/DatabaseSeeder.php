<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Factories\StudentFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //    $students = Student::factory()->count(10)->create();
        $users = User::factory()->count(10)->create();

        $students = Student::factory()->count(10)->create();
    }
}
