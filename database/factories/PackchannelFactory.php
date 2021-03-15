<?php

namespace Database\Factories;

use App\Models\Packchannel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackchannelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Packchannel::class;

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
           'cable_id'=>$this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
