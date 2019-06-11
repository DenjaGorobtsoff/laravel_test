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
         $this->call(UserTableSeeder::class);
         $this->call(BlogCategoriesTableSeeder::class);
         $this->call(CookbookIngredientTableSeeder::class);
         factory(App\Models\BlogPost::class, 100)->create();
    }
}
