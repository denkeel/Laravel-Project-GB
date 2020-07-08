<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsOneTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $number = 5;
        $response = $this->get("/news/$number");

        $response->assertSee("Новость номер $number");
        $response->assertStatus(200);
    }
}
