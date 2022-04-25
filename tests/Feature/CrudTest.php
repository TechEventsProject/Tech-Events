<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            ->assertViewIs('landing');

    }

    //---------------DELETE-------------------

    public function test_delete_event_admin()
    {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(0, Event::all());
    }

    public function test_user_cannot_delete_event(){

        $this->withExceptionHandling();

        $userFactory = User::factory()->create();
        Auth::login($userFactory);
        $userRetrieve = Auth::user();
        $this->actingAs($userRetrieve);

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(1, Event::all());
    }

    //---------------VIEW EDIT-------------------

    public function test_view_edit()
    {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

        Event::factory()->create();

        $response = $this->get('/edit/1');
        $response->assertStatus(200)
            ->assertViewIs('edit');
    }

    public function test_user_cannot_view_edit() 
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create();

        Auth::login($userFactory);

        $user = Auth::user();
        $this->actingAs($user);

        Event::factory()->create();

        $response = $this->get('/edit/1');
        $response->assertStatus(302);
    }

    //---------------UPDATE-------------------

    public function test_update_event()
    {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $this->patch(route('update', $event->id), ['name' => 'New Name']);

        $this->assertEquals(Event::first()->name, 'New Name');
        $this->assertCount(1, Event::all());
    }

    public function test_user_cannot_update() 
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create();

        Auth::login($userFactory);
        $user = Auth::user();

        $this->actingAs($user);

        $event = Event::factory()->create();

        $this->assertCount(1, Event::all());

        $this->patch(route('update', $event->id), ["name" => "New name"]);
        $this->assertNotEquals(Event::first()->name, "New name");
    }


    //---------------VIEW CREATE-------------------

    public function test_view_create()
    {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

        $response = $this->get('/create');

        $response->assertStatus(200)
            ->assertViewIs('create');
    }

    public function test_user_cant_view_create()
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create();
        
        Auth::login($userFactory);

        $user = Auth::user();

        $this->actingAs($user);

        $response = $this->get('/create');

        $response->assertStatus(302);
    }

    //---------------STORE-------------------

    public function test_store_event()
    {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

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

    public function test_user_cant_store_event() 
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create();
        Auth::login($userFactory);
        $user = Auth::user();
        $this->actingAs($user);
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
        $this->assertCount(0, Event::all());
    }

    //---------------VIEW SHOW-------------------

    public function test_show_view() {
        $this->withExceptionHandling();

        $adminFactory = User::factory()->create(['isAdmin' => true]);
        Auth::login($adminFactory);
        $userAdmin = Auth::user();
        $this->actingAs($userAdmin);

        $event = Event::factory()->create();

        $response = $this->get(route('show', $event->id));

        $response->assertStatus(200)
            ->assertSee($event->description);
    }

    public function test_admin_can_highlight_event() 
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create(["isAdmin" => true]);

        Auth::login($userFactory);
        $admin = Auth::user();

        $this->actingAs($admin);

        $event = Event::factory()->create(["highlighted" => 0]);

        $this->assertCount(1, Event::all());

        $this->patch(route('update', $event->id), ["highlighted" => 1]);
        $this->assertEquals(Event::first()->highlighted, 1);
    }
    public function test_user_cant_highlight_event() 
    {
        $this->withExceptionHandling();

        $userFactory = User::factory()->create();

        Auth::login($userFactory);
        $user = Auth::user();

        $this->actingAs($user);

        $event = Event::factory()->create(["highlighted" => 0]);

        $this->assertEquals(Event::first()->highlighted, 0);

        $this->assertCount(1, Event::all());

        $this->patch(route('update', $event->id), ["highlighted" => 1]);
        $this->assertNotEquals(Event::first()->highlighted, 1);
    }
}

