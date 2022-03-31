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

    public function test_delete_event()
    {
        $this->withExceptionHandling();

        $Event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->delete(route('delete', $Event->id));
        $this->assertCount(0, Event::all());
        

    }
}
