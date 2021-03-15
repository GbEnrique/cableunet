<?php

namespace Database\Factories;

use App\Models\Internet;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(),
           'price' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 1000),
           'speed' =>$this->faker->numberBetween($min = 2, $max = 8)
        ];
    }
}
