<?php

namespace Database\Factories;

use App\Models\SkateBoard;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkateBoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SkateBoard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'type_id' => $this->faker->numberBetween(1,3),
            'price' =>$this->faker->numberBetween(1,10),
            'print_price' =>$this->faker->numberBetween(10,20)
        ];
    }
}
