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
        
        Event::factory()->create(['name' => 'UI Design', 'speaker'=>'Jessica Mejia', 'date_and_time'=>'2022-08-24 12:30:00', 'max_participants'=> 8, 'description'=>'In 17 lessons, Jess teaches his unconventional philosophy on design, and art.!', 'image'=>'https://images.pexels.com/photos/1762851/pexels-photo-1762851.jpeg?cs=srgb&dl=pexels-ann-h-1762851.jpg&fm=jpg', 'location'=>'L.A.', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Angular Bases', 'speaker'=>'Adrián Pelayo', 'date_and_time'=>'2022-05-25 12:30:00', 'max_participants'=> 12, 'description'=>'Adrián teaches you his method for solving everyday problems, evaluating information. ', 'image'=>'https://images.pexels.com/photos/11138000/pexels-photo-11138000.jpeg?cs=srgb&dl=pexels-sergey-katyshkin-11138000.jpg&fm=jpg', 'location'=>'Vancouver', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Motivational Speech', 'speaker'=>'Laura Sanchez', 'date_and_time'=>'2022-04-26 08:00:00', 'max_participants'=> 10, 'description'=>'Laura Sanchez shares her insights into human intelligence, motivation, and activism.', 'image'=>'https://images.pexels.com/photos/3831849/pexels-photo-3831849.jpeg?cs=srgb&dl=pexels-cottonbro-3831849.jpg&fm=jpg', 'location'=>'Madagascar', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Mysql Insight', 'speaker'=>'Maria DB', 'date_and_time'=>'2021-06-21 20:30:00', 'max_participants'=> 1, 'description'=>' Maria DB teaches you the science of MYSQL and how to optimize every step.', 'image'=>'https://images.pexels.com/photos/3002547/pexels-photo-3002547.jpeg?cs=srgb&dl=pexels-vit%C3%B3ria-santos-3002547.jpg&fm=jpg', 'location'=>'Hell', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Learning Git', 'speaker'=>'Sandra Lee', 'date_and_time'=>'2020-03-15 18:15:00', 'max_participants'=> 0, 'description'=>'No matter what your coding goals are, the best place to start is by building a strong foundation. !', 'image'=>'https://images.pexels.com/photos/5011647/pexels-photo-5011647.jpeg?cs=srgb&dl=pexels-uzunov-rostislav-5011647.jpg&fm=jpg', 'location'=>'Unsplash', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Rigging Class', 'speaker'=>'Alejandro V.', 'date_and_time'=>'2022-04-27 16:30:00', 'max_participants'=> 20, 'description'=>'Create professional full body character rigs in Cinema 4D - Get your 3D characters to another level. Rigging Masterclass', 'image'=>'https://images.pexels.com/photos/4934512/pexels-photo-4934512.jpeg?cs=srgb&dl=pexels-cottonbro-4934512.jpg&fm=jpg', 'location'=>'Holanda', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Tailwind Props', 'speaker'=>'Ales Navarro', 'date_and_time'=>'2022-11-19 11:40:00', 'max_participants'=> 15, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/933877/pexels-photo-933877.jpeg?cs=srgb&dl=pexels-mica-asato-933877.jpg&fm=jpg', 'location'=>'Yonaguni', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'ORM Laravel', 'speaker'=>'Oriol Codina', 'date_and_time'=>'2022-10-7 13:00:00', 'max_participants'=> 15, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/5952647/pexels-photo-5952647.jpeg?cs=srgb&dl=pexels-mati-mango-5952647.jpg&fm=jpg', 'location'=>'Helsinki', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Start with Canvas', 'speaker'=>'Scarlet da Silva', 'date_and_time'=>'2022-08-08 09:15:00', 'max_participants'=> 30, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/1646981/pexels-photo-1646981.jpeg?cs=srgb&dl=pexels-deeana-arts-1646981.jpg&fm=jpg', 'location'=>'Bogatell BCN', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Your Career', 'speaker'=>'Daniel', 'date_and_time'=>'2022-07-20 09:30:00', 'max_participants'=> 40, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://images.pexels.com/photos/9454915/pexels-photo-9454915.jpeg?cs=srgb&dl=pexels-mo-9454915.jpg&fm=jpg', 'location'=>'Montcada', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        Event::factory()->create(['name' => 'Blaster', 'speaker'=>'Keane', 'date_and_time'=>'2022-12-24 10:45:00', 'max_participants'=> 10, 'description'=>' In his photography class, learn different creative approaches, editorial spreads, and passion projects, bring your photography to new heights.', 'image'=>'https://images.pexels.com/photos/752525/pexels-photo-752525.jpeg?cs=srgb&dl=pexels-omar-houchaimi-752525.jpg&fm=jpg', 'location'=>'porky town', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user.com']);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@user.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'bigbae', 'email' => 'bigbae@bigbae.com']);
        User::factory()->create(['name' => 'admin-bigbae', 'email' => 'admin@bigbae.com', 'isAdmin' => true]);
    }
}