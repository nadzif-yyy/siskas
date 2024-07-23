<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class asramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 6666; $i++) 
        {
            DB::table('asramas')->insert([
                'asrama' => $faker->randomElement(['Asrama 1', 'Asrama 2', 'Asrama 3', 'Asrama 4', 'Asrama 5', 'Asrama 6', 'Asrama 7', 'Asrama 8', 'Asrama 9', 'Asrama 10']),
                'nama' => $faker->name,
                'sekolah' => $faker->company,
                'gender' => $faker->randomElement(['l', 'p']),
                'jenjang_sklh' => $faker->randomElement(['SD', 'SMP', 'SMA']),
                'kelas' => $faker->randomElement(['X', 'XI', 'XII']),
                'status' => $faker->randomElement(['mukim', 'non mukim', 'pesantren']),
                'kriteria' => $faker->randomElement(['yatim', 'piatu', 'yatim piatu', 'dhuafa', 'anak kepas', 'anak art']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
