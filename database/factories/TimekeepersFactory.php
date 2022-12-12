<?php

namespace Database\Factories;

use App\Models\TimekeepersModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\timekeepers>
 */
class TimekeepersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = TimekeepersModel::class;

    public function definition()
    {
        return [
            'office_id' => rand(2, 6),
            'account' => $this->faker->userName,
            'password' => $this->faker->password,
            'device_index' => 1,
            'status' => 1,
            'created_user' => 1,
            'updated_user' => 1
        ];
    }
}
