<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goods>
 */
class GoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => $this->faker->numberBetween(1, 10),
            'brand_id' => $this->faker->numberBetween(1, 5),
            'code' => $this->faker->unique()->regexify('[A-Z0-9]{12}'),
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->text(50),
            'price' => $this->faker->numberBetween(10, 100) * 1000,
            'stock' => 999999,
            'thumbnail' => $this->faker->imageUrl(),
            'simg1' => '',
            'simg2' => '',
            'simg3' => '',
            'simg4' => '',
            'simg5' => '',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
