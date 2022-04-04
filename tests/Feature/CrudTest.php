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

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(0, Event::all());
        
    }

    public function test_view_edit()
    {
        $this->withExceptionHandling();

        Event::factory()->create();

        $response = $this->get('/edit/1');
        $response->assertStatus(200)
            ->assertViewIs('edit');
    }

    public function test_update_event()
    {
        $this->withExceptionHandling();
        $Event = Event::factory()->create();

        $this->assertCount(1, Event::all());
        $this->patch(route('update', $Event->id), ["name" => "New Name"]);

        $this->assertEquals(Event::first()->name, "New Name");
        $this->assertCount(1, Event::all());
    }

    public function test_view_create()
    {
        $this->withExceptionHandling();

        $response = $this->get('/create');

        $response->assertStatus(200)
            ->assertViewIs('create');
    }
    
    public function test_store_event()
    {
        $this->withExceptionHandling();

        $this->post(route('store'), [
            "name" => "Random Name",
            "speaker" => "Me",
            "date_and_time" => "2011-09-17 12:36:49",
            "participants" => "23",
            "max_participants" => "64",
            "description" => "A long long description full of Lorem Ipsums",
            "image" => "https://via.placeholder.com/640x480.png/ffff00?text=RandomName",
            "location" => "Random Location"
        ]);
        $this->assertCount(1, Event::all());
    }

    public function test_show_view() {
        $this->withExceptionHandling();

        Event::factory()->create();

        $response = $this->get('/show/1');

        $response->assertStatus(200)
            ->assertViewIs('show');
    }
}

