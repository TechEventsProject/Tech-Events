<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventsTest extends TestCase
{
    use RefreshDatabase;

    public function test_highlighted_events_are_ordered() 
    {
        $this->withExceptionHandling();

        $event1 = Event::factory()->create(['date_and_time' => '2022-04-29 11:00:00','highlighted' => true]);
        $event2 = Event::factory()->create(['date_and_time' => '2022-04-30 11:00:00','highlighted' => true]);

        $this->assertCount(2, Event::all());

        $response = $this->get('/');

        $this->assertGreaterThan($event1->date_and_time, $event2->date_and_time);

    }
}