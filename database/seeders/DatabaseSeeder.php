<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EntitiesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // php artisan db:seed

        $this->call([
            EntitiesSeeder::class,
        ]);
    }
}
