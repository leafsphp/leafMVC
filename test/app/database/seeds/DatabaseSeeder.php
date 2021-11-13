<?php

namespace App\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() : array
    {
        return [
            UsersSeeder::class,
        ];
    }
}
