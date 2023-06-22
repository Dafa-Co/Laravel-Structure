<?php

namespace Database\Seeders;

use Database\Seeders\Stories\Story1Seeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

/**
 *
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call("app:admin");

        $this->call(Story1Seeder::class);
    }
}
