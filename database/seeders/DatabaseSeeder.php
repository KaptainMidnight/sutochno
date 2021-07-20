<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Favorite;
use App\Models\User;
use App\Models\View;
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
         User::factory(10)->create();
         Facility::factory(100)->create();
         View::factory(1000)->create();
         Favorite::factory(100)->create();
    }
}
