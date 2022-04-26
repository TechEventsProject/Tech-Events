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
        Event::factory(15)->create();
        Event::factory()->create(['name' => 'Laravel workshop', 'speaker'=>'Lara Sanchez', 'date_and_time'=>'2022-04-26 08:00:00', 'max_participants'=> 10, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://cms-assets.tutsplus.com/uploads/users/769/posts/25334/preview_image/get-started-with-laravel-6-400x277.png', 'location'=>'Depot Lab', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
       /*  Event::factory()->create(['name' => 'Suda de Ubuntu', 'speaker'=>'Maria DB', 'date_and_time'=>'2022-03-20 08:00:00', 'max_participants'=> 15, 'description'=>'Ubuntu ninja workshop', 'image'=>'https://images.pexels.com/photos/8727412/pexels-photo-8727412.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'location'=>'Depot Lab', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29', 'past_event'=> true, 'highlighted'=> false]); */
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user.com']);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@user.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'bigbae', 'email' => 'bigbae@bigbae.com']);
        User::factory()->create(['name' => 'admin-bigbae', 'email' => 'admin@bigbae.com', 'isAdmin' => true]);
    }
}
