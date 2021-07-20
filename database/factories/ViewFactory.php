<?php

namespace Database\Factories;

use App\Models\View;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = View::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facility_id' => $this->faker->numberBetween(1, 100),
            'user_id' => $this->faker->numberBetween(1, 10),
            'time' => now()
        ];
    }
}
