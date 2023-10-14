<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionSeeder::class);
        \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        \App\Models\Service::factory(10)->create();
    }
}
