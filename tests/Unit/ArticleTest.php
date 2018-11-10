<?php

namespace Tests\Unit;

use JWTAuth;
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
    public function testCreateArticleWithMiddleware()
    {
        $user = factory(\App\Models\User::class)->create();
        $payload = [
            'category_id' => 1,
            'title' => 'Lorem',
            'image_path' => 'https://lorempixel.com/640/480/?31879',
            'author_name' => 'Elon',
            'website_name' => 'Medium',
            'link' => 'http://stiedemann.com/aspernatur-assumenda-velit-nulla',
            'description' => 'Ipsum',
        ];

        $this->json('POST', '/api/v0/articles', $payload)
            ->assertStatus(200)
            ->assertJson( [
                'status' => 'Authorization Token not found',
            ]);
    }
}
