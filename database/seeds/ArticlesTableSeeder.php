<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = \Faker\Factory::create();

        // Define image to optimize onspeed
        $image  = $faker->imageUrl($width = 640, $height = 480);

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'category_id' => $faker->numberBetween($min = 1, $max = 10),
                'title' => $faker->sentence,
                'image_path' => $image,
                'author_name' => $faker->lastName,
                'website_name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'link' => $faker->url,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
