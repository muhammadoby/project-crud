<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Role\AdminRole;
use Database\Seeders\Role\UserRole;
use Database\Seeders\User\AdminSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminRole::class,
            UserRole::class,
            AdminSeeder::class
        ]);
    }
}
