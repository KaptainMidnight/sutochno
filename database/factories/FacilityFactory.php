<?php

namespace Database\Factories;

use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facility::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'square' => $this->faker->numberBetween(1, 150),
            'price' => $this->faker->numberBetween(5000, 100000),
            'booking' => $this->faker->boolean,
            'rental' => $this->faker->date(),
            'surrender' => $this->faker->date(),
            'residents' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
