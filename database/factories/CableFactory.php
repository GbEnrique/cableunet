<?php

namespace Database\Factories;

use App\Models\Cable;
use Illuminate\Database\Eloquent\Factories\Factory;

class CableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(),
           'price' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 1000)
        ];
    }
}
