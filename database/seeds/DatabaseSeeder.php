<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 5)->create();
        factory(App\Models\Category::class, 50)->create();
        factory(App\Models\Restaurant::class, 300)->create();
    }
}