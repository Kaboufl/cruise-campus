<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Read the CSV file
        $csv = array_map('str_getcsv', file('database/seeders/campuslist.csv'));

        // Skip the first row
        array_shift($csv);

        // Insert the data
        foreach ($csv as $campus) {
            Campus::create([
                'nom' => $campus[0],
                'adresse' => $campus[1],
                'ville' => $campus[3],
                'code_postal' => $campus[2],
            ]);
        }
    }
}
