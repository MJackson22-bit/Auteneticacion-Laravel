<?php

namespace Database\Seeders;

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
        \App\Models\Profesor::factory(20)->create();
        \App\Models\Clase::factory(20)->create();
        \App\Models\Aula::factory(20)->create();
        \App\Models\Imparte::factory(60)->create();
    }
}
