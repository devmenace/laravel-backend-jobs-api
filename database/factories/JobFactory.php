<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class JobFactory
 * @package Database\Factories
 */
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
            'property_id' => function () {
                return Property::all()->random();
            },
        ];
    }
}
