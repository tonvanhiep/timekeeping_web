<?php

namespace Database\Factories;

use App\Models\OfficesModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\offices>
 */
class OfficesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = OfficesModel::class;


    public function definition()
    {
        return [
            'office_name' => $this->faker->city,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'numerphone' => $this->faker->phoneNumber,
            'created_user' => 1,
            'updated_user' => 1
        ];
    }
}
