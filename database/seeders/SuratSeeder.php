<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 70; $i++) {
            Surat::create([
                'nama_surat' => $faker->name,
                'no_surat' => 'KEP/AL/III/' . $faker->randomNumber(3)
            ]);
        }
    }
}
