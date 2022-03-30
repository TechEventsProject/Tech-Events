<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_events_printing_home()
    {

        $this->withExceptionHandling();
        Event::all();

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');

    }
}
