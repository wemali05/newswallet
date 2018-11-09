<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Start from an empty table
        Category::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            Category::create([
                'title' => $faker->word, 
                'description' => $faker->text($maxNbChars = 200) 
            ]);
        }
    }
}
