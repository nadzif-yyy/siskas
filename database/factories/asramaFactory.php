<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\asrama;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class asramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asrama' => $this->fake()->name(),
            'nama' => $this->fake()->name(),
            'sekolah' => $this->fake()->name(),
            'gender' => $this->fake()->enum (),
            'jenjang_sklh' => $this->fake()->name (),
            'kelas' => $this->fake()->name(),
            'status' => $this->fake()->name (),
            'kriteria' => $this->fake()->name (),
        ];
    }
}
