<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        for ($i = 1; $i <= 10; $i++) {
            $cName = 'Category '. $i;
            $parentId = ($i > 4) ? rand(1,4) : 0;

            $categories[] = [
                'title' => $cName,
                'slug' => str_slug($cName),
                'parent_id' => $parentId,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('blog_categories')->insert($categories);
    }
}
