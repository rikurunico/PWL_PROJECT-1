<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_supplier' => $this->faker->name,
            'deskripsi' => $this->faker->text,
            'gambar' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
