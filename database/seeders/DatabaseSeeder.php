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
        Event::factory()->create(['name' => 'Laravel workshop', 'speaker'=>'Lara Sacnhez', 'date_and_time'=>'2022-04-26 08:00:00', 'participants'=> 8, 'max_participants'=> 10, 'description'=>'Join to our first laravel workshop at Tech Events!', 'image'=>'https://cms-assets.tutsplus.com/uploads/users/769/posts/25334/preview_image/get-started-with-laravel-6-400x277.png', 'location'=>'Depot Lab', 'created_at'=>'2022-04-01 08:23:29', 'updated_at'=>'2022-04-01 08:23:29']);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user.com']);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@user.com', 'isAdmin' => true]);


    }
}
