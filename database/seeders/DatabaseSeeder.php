<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Run another seeder
        $this->call(CampusesSeeder::class);

        User::create([
            'pseudo' => 'Rapide et Furieux',
            'nom' => 'Diesel',
            'prenom' => 'Vin',
            'ville' => 'Paris',
            'telephone' => '0123456789',
            'email' => 'test@example.com',
            'campus' => Campus::first()->id,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
