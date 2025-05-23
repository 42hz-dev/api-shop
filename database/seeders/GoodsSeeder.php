<?php

namespace Database\Seeders;

use App\Models\Goods;
use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goods::factory()->count(50)->create();
    }
}
