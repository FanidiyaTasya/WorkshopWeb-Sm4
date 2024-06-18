<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $faker = fake('id_ID');
        return [
            'nim' => $faker->unique()->numerify('E######'),
            'nama' => $faker->name,
            'tgl_lahir' => $faker->dateTimeBetween('-30 years', '-17 years')->format('Y-m-d'),
            'alamat' => $faker->city,
            'th_angkatan' => $faker->year,
            'status' => $faker->randomElement(['Aktif', 'Tidak Aktif']),
        ];
    }
}
