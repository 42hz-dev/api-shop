<?php

namespace Database\Seeders;

use App\Models\Models;
use Illuminate\Database\Seeder;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Models::factory()->count(10)->create();
    }
}
