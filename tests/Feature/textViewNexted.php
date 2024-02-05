<?php

namespace Tests\Feature;

use Tests\TestCase;

class textViewNexted extends TestCase
{
    /**
     * A basic feature test example.
     */

     public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testViewNexted(): void
    {
        $this->get('/user')
            ->assertStatus(200);
    }
}
