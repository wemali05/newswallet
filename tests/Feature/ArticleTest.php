<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Article;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    // /**
    //  * Test if the article was created in the right way
    //  *
    //  * @return void
    //  */
    // public function testsArticlesAreCreatedCorrectly()
    // {
    //     $payload = [
    //         'category_id' => 1,
    //         'title' => 'Lorem',
    //         'image_path' => 'https://lorempixel.com/640/480/?31879',
    //         'author_name' => 'Elon',
    //         'website_name' => 'Medium',
    //         'link' => 'http://stiedemann.com/aspernatur-assumenda-velit-nulla',
    //         'description' => 'Ipsum',
    //     ];

    //     $this->json('POST', '/api/v0/articles', $payload)
    //         ->assertStatus(201)
    //         ->assertJson([
    //                 'id' => 1,
    //                 'category_id' => 1,
    //                 'title' => 'Lorem',
    //                 'image_path' => 'https://lorempixel.com/640/480/?31879',
    //                 'author_name' => 'Elon',
    //                 'website_name' => 'Medium',
    //                 'link' => 'http://stiedemann.com/aspernatur-assumenda-velit-nulla',
    //                 'description' => 'Ipsum'
    //             ]);
    // }

    // /**
    //  * Test if the article was are deleted correctly
    //  *
    //  * @return void
    //  */
    // public function testsArtilcesAreDeletedCorrectly()
    // {
    //     $article = factory(Article::class)->create([
    //         'category_id' => 1,
    //         'title' => 'Lorem',
    //         'image_path' => 'https://lorempixel.com/640/480/?31879',
    //         'author_name' => 'Elon',
    //         'website_name' => 'Medium',
    //         'link' => 'http://stiedemann.com/aspernatur-assumenda-velit-nulla',
    //         'description' => 'Ipsum',
    //     ]);

    //     $this->json('DELETE', '/api/v0/articles/' . $article->id, [])
    //         ->assertStatus(204);
    // }

    // /**
    //  * Test if the articles are listed correctly
    //  *
    //  * @return void
    //  */
    // public function testArticlesAreListedCorrectly()
    // {
    //     factory(Article::class)->create([
    //         'category_id' => 1,
    //         'title' => 'Title1',
    //         'image_path' => 'https://link.com/pic/1',
    //         'author_name' => 'Brian',
    //         'website_name' => 'Medium',
    //         'link' => 'http://kuza.com/1',
    //         'description' => 'Description1',
    //     ]);

    //     factory(Article::class)->create([
    //         'category_id' => 2,
    //         'title' => 'Title2',
    //         'image_path' => 'https://link.com/pic/2',
    //         'author_name' => 'Okinyi',
    //         'website_name' => 'Blogger',
    //         'link' => 'http://kuza.com/2',
    //         'description' => 'Description2',
    //     ]);

    //     $response = $this->json('GET', '/api/v0/articles', [])
    //         ->assertStatus(200)
    //         ->assertJson([
    //             [ 
    //                 'category_id' => 1,
    //                 'title' => 'Title1',
    //                 'image_path' => 'https://link.com/pic/1',
    //                 'author_name' => 'Brian',
    //                 'website_name' => 'Medium',
    //                 'link' => 'http://kuza.com/1',
    //                 'description' => 'Description1',
    //              ],
    //             [ 
    //                 'category_id' => 2,
    //                 'title' => 'Title2',
    //                 'image_path' => 'https://link.com/pic/2',
    //                 'author_name' => 'Okinyi',
    //                 'website_name' => 'Blogger',
    //                 'link' => 'http://kuza.com/2',
    //                 'description' => 'Description2',
    //              ]
    //         ])
    //         ->assertJsonStructure([
    //             '*' => ['id', 'category_id', 'title', 'image_path', 'author_name', 'website_name', 'link', 'description', 'views', 'created_at', 'updated_at'],
    //         ]);
    // }
}
