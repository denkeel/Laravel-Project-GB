<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsShowCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $category = 'одежда';
        $response = $this->get("/news/categories/$category");

        $response->assertSee("Категория: $category");
        $response->assertStatus(200);
    }
}
