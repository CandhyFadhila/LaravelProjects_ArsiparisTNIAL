<?php

namespace Database\Seeders;

use App\Models\LantamalSurat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LantamalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 70; $i++) {
            LantamalSurat::create([
                'asal_surat' => $faker->name,
                'no_surat' => 'KEP/AL/III/' . $faker->randomNumber(3)
            ]);
        }
    }
}
