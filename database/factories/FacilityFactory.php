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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'square' => $this->faker->numberBetween(1, 150),
            'price' => $this->faker->numberBetween(5000, 100000),
            'booking' => $this->faker->boolean,
            'description' => $this->faker->text,
            'city' => $this->faker->city,
            'rental' => $this->faker->date(),
            'surrender' => $this->faker->date(),
            'residents' => $this->faker->numberBetween(1, 5),
            'max_residents' => $this->faker->numberBetween(2, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'beds' => $this->faker->numberBetween(1, 5),
            'floor' => $this->faker->numberBetween(1, 20),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
