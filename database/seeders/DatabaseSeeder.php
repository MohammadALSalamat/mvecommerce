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
        $this->call(userSeedr::class);
        // \App\Models\User::factory(50)->create();
        // \App\Models\category::factory(20)->create();
        // \App\Models\brand::factory(10)->create();
        // \App\Models\product::factory(50)->create();
    }
}
