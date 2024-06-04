<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // التأكد من وجود إدخالات جديدة
        for ($i = 0; $i < 100; $i++) {
            DB::table('clients')->insert([
                'ClientName' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'website' => $faker->url,
                'city' => $faker->city,
                'image' => 'image.jpg', // يمكنك استخدام $faker->imageUrl() إذا كنت ترغب في صورة عشوائية
                'active' => $faker->boolean,
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}