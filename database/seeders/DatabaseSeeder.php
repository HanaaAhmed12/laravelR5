<?php

namespace Database\Seeders;
// use Database\Factories\ClientFactory;
use App\Models\Client;
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

            Client::factory(30)->create();
            //  $this->call([
            //     ClientSeeder::class,
            // ]);


            // User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
    }
}
