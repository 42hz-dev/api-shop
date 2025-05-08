<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Member;
use App\Models\Models;
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
            'code' => $this->faker->uuid(),
            'name' => $this->faker->name(20),
            'description' => $this->faker->text(50),
            'price' => $this->faker->numberBetween(10000, 100000),
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
