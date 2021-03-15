<?php

namespace Database\Factories;

use App\Models\Programation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(),
            'start_hour'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'end_hour'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'day'=>$this->faker->randomElement(['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']),
            'channel_id'=>$this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
