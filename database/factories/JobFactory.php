<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => 'open',
            'property_id' => $this->faker->numberBetween(0, 100),
        ];
    }
}
