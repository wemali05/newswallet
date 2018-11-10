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
}
