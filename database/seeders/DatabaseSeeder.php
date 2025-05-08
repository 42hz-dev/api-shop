<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MemberSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ModelsSeeder::class);
        $this->call(GoodsSeeder::class);
        $this->call(OptionSeeder::class);
    }
}
