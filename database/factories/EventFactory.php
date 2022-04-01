<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->company(),
            'speaker' => $this->faker->name(),
            'date_and_time'=> $this->faker->dateTime($max = 'now', $timezone = null),
            'participants'=> $this->faker->randomDigitNot(0),
            'max_participants'=>$this->faker->randomDigitNot(0),
            'description'=> $this->faker->text($maxNbChars = 100),
            'image'=> $this->faker->imageUrl($width = 640, $height = 480),
            'location'=> $this->faker->address(),
        ];
    }
}
