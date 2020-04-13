<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function user_can_visit_home()
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('blog');
    }

    /** @test */
    public function user_cant_visit_home()
    {
        $response = $this->get('/home');

        $response->assertStatus(404);
    }
}
