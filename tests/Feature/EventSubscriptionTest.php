<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class EventSubscriptionTest extends TestCase
{
    /**
    * A basic feature test example.
    *
    * @return void
    */
    
    use RefreshDatabase;
    
    public function test_guest_cant_subscribe(){
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $response = $this->get(route('subscribe' , $event->id));

        $response->assertStatus(302)
            ->assertRedirect('/login');
    }

    public function test_user_can_subscribe(){
        $this->withExceptionHandling();

        $event=Event::factory()->create();
        $user=User::factory()->create();
        Auth::login($user);
        $userLogged = Auth::user();
        $this->actingAs($userLogged);

        $response=$this->get(route('subscribe' , $event->id));

        $this->assertTrue($event->user->contains($userLogged->id));
    }

    public function test_user_can_unsubscribe_from_event_subscribed() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $user = User::factory()->create();

        Auth::login($user);
        $userLogged = Auth::user();

        $this->actingAs($userLogged);

        $user->event()->attach($event);

        $this->assertEquals($user->id, $event->user[0]->id);

        $response = $this->get(route('unsubscribe', $event->id));

        $this->assertNotContains($user->id, $event->user);
        $response->assertRedirect('home');
    }

    public function test_user_cant_subscribe_to_event_when_outdated() {
        $this->withExceptionHandling();

        $event = Event::factory()->create(["past_event" => true]);
        $user = User::factory()->create();

        Auth::login($user);
        $userLogged = Auth::user();

        $this->actingAs($userLogged);

        $response = $this->get(route('subscribe', $event->id));

        $response->assertRedirect('show/1');
        $this->assertNotContains($user->id, $event->user);
    }
    
    public function test_past_events_printing_home()
    {
        $this->withExceptionHandling();

        $pastEvent = Event::factory()->create(['past_event'=>true]);

        $response = $this->get('home', compact('pastEvent'));
        $response->assertStatus(200)
            ->assertSee($pastEvent->name);

    }
}

