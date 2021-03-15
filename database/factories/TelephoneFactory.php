<?php

namespace Database\Factories;

use App\Models\Telephone;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelephoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telephone::class;

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
           'minutes' =>$this->faker->numberBetween($min = 100, $max = 1000)
        ];
    }
}
