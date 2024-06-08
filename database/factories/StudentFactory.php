<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
        'StudentName' => $this->faker->name(),
        'age' => $this->faker->numberBetween(30 , 60),
        'phone' => $this->faker->phoneNumber(),
        'email' => $this->faker->unique()->safeEmail(),
    ];
    }
}
