<?php

namespace Tests\Feature;

use Tests\TestCase;

class TesRoute extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function tes(): void
    {
        $response = $this->get('/tes');

        $response->assertStatus(200);
    }
}
