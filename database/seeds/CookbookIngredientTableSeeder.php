<?php

use Illuminate\Database\Seeder;

class CookbookIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            'meat',
            'chicken fillet',
            'carrot',
            'potato',
            'spice',
            'bulb',
            'tomato',
            'oil',
            'sweet pepper',
            'fish',

        ];

        $ingredient = [];

        foreach ($ingredients as $v) {

            $ingredient[] = [
                'description' => $v,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        \DB::table('cookbook_ingredients')->insert($ingredient);

    }
}
