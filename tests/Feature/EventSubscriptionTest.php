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
        $response = $this->get(route('subscription' , $event->id));

        $response->assertStatus(302)
            ->assertRedirect('/login');
    }

    public function test_user_subscribe(){
        $this->withExceptionHandling();

        $event=Event::factory()->create();
        $user=User::factory()->create();
        Auth::login($user);
        $userLogged = Auth::user();
        $this->actingAs($userLogged);

        $response=$this->get(route('subscription' , $event->id));

        $this->assertEquals($user->id,$event->user[0]->id);
    }
}

