<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testsRequiresPasswordEmailAndName()
    {
        $this->json('post', '/api/register')
            ->assertStatus(400);
    }

    public function testsRequirePasswordConfirmation()
    {
        $payload = [
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => '123456',
        ];

        $this->json('post', '/api/register', $payload)
            ->assertStatus(400);
    }
}
