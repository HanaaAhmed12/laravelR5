<?php
namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{

    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ClientName' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'email' => now(),
            'website' => $this->faker->url(),
            'city_id' => $this->faker->numberBetween(1, 20),
            'image' => $this->faker->imageUrl(),
            'active' => $this->faker->boolean(),
            'address' => $this->faker->address(),
        ];
    }
}