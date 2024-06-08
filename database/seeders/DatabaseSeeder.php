<?php

namespace Database\Seeders;
// use Database\Factories\ClientFactory;
use App\Models\Client;
use App\Models\Student;
use App\Models\City;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\ClientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            // \App\Models\Client::factory(10)->create();
            City::factory(50)->create();
            Client::factory(50)->create();
            // Student::factory(50)->create();
            //  $this->call([
            //     ClientSeeder::class,
            $students = Student::factory()->count(50)->create();
            $courses = Course::factory()->count(30)->create();
            $students->each(function ($student) use ($courses) {
                $student->courses()->attach($courses->random(rand(1, 3))->pluck('id'));
            });
            // ]);


            $this->call([
                CourseSeeder::class,
            ]);

            // User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
    }
}