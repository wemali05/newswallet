<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

    /**
     * Test if an article can be created outside the middleware
     */
    public function testCreateArticleWithMiddleware()
    {
        $data = [
            'category_id' => 1,
            'title' => "This is an article",
            'image_path' => "https://images.pexels.com/photos/1000084/pexels-photo-1000084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
            'author_name' => 'KuzaLab',
            'website_name' => "kuzalab.com",
            "link" => "http://kuzalab.com",
            "description" => "This is the description"
            
        ];

        $response = $this->json('POST', '/api/v0/articles',$data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }

    /**
     * Test if an article was created
     */
    public function testCreateArticle()
    {
        $data = [
            'category_id' => 1,
            'title' => "This is an article",
            'image_path' => "https://images.pexels.com/photos/1000084/pexels-photo-1000084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
            'author_name' => 'KuzaLab',
            'website_name' => "kuzalab.com",
            "link" => "http://kuzalab.com",
            "description" => "This is the description"
        ];
        $user = factory(\App\Models\User::class)->create();
        $response = $this->actingAs($user, 'api')->json('POST', '/api/v0/articles',$data);
        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
        $response->assertJson(['data' => $data]);
    }

    /**
     * Test getting all articles
     */
    public function testGettingAllProducts()
    {
        $response = $this->json('GET', '/api/v0/articles');
        $response->assertStatus(200);

        $response->assertJsonStructure(
            [
                ['id', 'category_id', 'title', 'image_path', 'author_name', 'website_name', 'link', 'description', 'views', 'created_at', 'updated_at']
            ]
        );
    }
}
