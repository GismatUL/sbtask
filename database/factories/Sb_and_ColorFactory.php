<?php

namespace Database\Factories;

use App\Models\Sb_and_Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sb_and_ColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sb_and_Color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sb_id' => $this->faker->numberBetween(1,20),
            'color_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
