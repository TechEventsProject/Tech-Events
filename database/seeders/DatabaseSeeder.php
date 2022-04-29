<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Event::factory(15)->create();
        //Event::factory()->create(['name' => 'Laravel workshop', 'speaker'=>'Lara Sanchez', 'date_and_time'=>'2022-04-26 08:00:00', 'max_participants'=> 10, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://cms-assets.tutsplus.com/uploads/users/769/posts/25334/preview_image/get-started-with-laravel-6-400x277.png', 'location'=>'Depot Lab', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
       /*  Event::factory()->create(['name' => 'Suda de Ubuntu', 'speaker'=>'Maria DB', 'date_and_time'=>'2022-03-20 08:00:00', 'max_participants'=> 15, 'description'=>'Ubuntu ninja workshop', 'image'=>'https://images.pexels.com/photos/8727412/pexels-photo-8727412.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'location'=>'Depot Lab', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29', 'past_event'=> true, 'highlighted'=> false]); */
        
        Event::factory()->create(['name' => 'UI Design', 'past_event' => 0, 'speaker'=>'Jessica Mejia', 'date_and_time'=>'2022-08-24 12:30:00', 'max_participants'=> 8, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/1762851/pexels-photo-1762851.jpeg?cs=srgb&dl=pexels-ann-h-1762851.jpg&fm=jpg', 'location'=>'L.A.', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Angular Bases', 'past_event' => 0, 'speaker'=>'Adrián Pelayo', 'date_and_time'=>'2022-05-25 12:30:00', 'max_participants'=> 12, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/11138000/pexels-photo-11138000.jpeg?cs=srgb&dl=pexels-sergey-katyshkin-11138000.jpg&fm=jpg', 'location'=>'Vancouver', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Motivational Speech', 'past_event' => 0, 'speaker'=>'Lara Sanchez', 'date_and_time'=>'2022-04-26 08:00:00', 'max_participants'=> 10, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/3831849/pexels-photo-3831849.jpeg?cs=srgb&dl=pexels-cottonbro-3831849.jpg&fm=jpg', 'location'=>'Madagascar', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Mysql Insight', 'past_event' => 0, 'speaker'=>'Maria DB', 'date_and_time'=>'2021-06-21 20:30:00', 'max_participants'=> 1, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/2643596/pexels-photo-2643596.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'location'=>'Hell', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Learning Git', 'past_event' => 0, 'speaker'=>'Sandra Lee', 'date_and_time'=>'2020-03-15 18:15:00', 'max_participants'=> 0, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/3002547/pexels-photo-3002547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'location'=>'Unsplash', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Rigging', 'past_event' => 0, 'speaker'=>'Alejandro V.', 'date_and_time'=>'2022-04-27 16:30:00', 'max_participants'=> 20, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/247819/pexels-photo-247819.jpeg?cs=srgb&dl=pexels-pixabay-247819.jpg&fm=jpg', 'location'=>'Holanda', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Tailwind Props', 'past_event' => 0, 'speaker'=>'Ales Navarro', 'date_and_time'=>'2022-11-19 11:40:00', 'max_participants'=> 15, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/933877/pexels-photo-933877.jpeg?cs=srgb&dl=pexels-mica-asato-933877.jpg&fm=jpg', 'location'=>'Yonaguni', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'ORM Laravel', 'past_event' => 0, 'speaker'=>'Oriol Codina', 'date_and_time'=>'2022-10-7 13:00:00', 'max_participants'=> 15, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/3913025/pexels-photo-3913025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'location'=>'Helsinki', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Start with Canvas', 'past_event' => 0, 'speaker'=>'Scarlet da Silva', 'date_and_time'=>'2022-08-08 09:15:00', 'max_participants'=> 30, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/1646981/pexels-photo-1646981.jpeg?cs=srgb&dl=pexels-deeana-arts-1646981.jpg&fm=jpg', 'location'=>'Bogatell BCN', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Your Career', 'past_event' => 0, 'speaker'=>'Daniel', 'date_and_time'=>'2022-07-20 09:30:00', 'max_participants'=> 40, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/8728383/pexels-photo-8728383.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'location'=>'Montcada', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Blaster', 'past_event' => 0, 'speaker'=>'Keane', 'date_and_time'=>'2022-12-24 10:45:00', 'max_participants'=> 10, 'description'=>' In his photography class, learn different creative approaches, editorial spreads, and passion projects, bring your photography to new heights.', 'image'=>'https://images.pexels.com/photos/2252541/pexels-photo-2252541.jpeg?cs=srgb&dl=pexels-mark-stebnicki-2252541.jpg&fm=jpg', 'location'=>'porky town', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user.com']);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@user.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'bigbae', 'email' => 'bigbae@bigbae.com']);
        User::factory()->create(['name' => 'admin-bigbae', 'email' => 'admin@bigbae.com', 'isAdmin' => true]);
    }
}
