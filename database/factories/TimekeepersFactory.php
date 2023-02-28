<?php

namespace Database\Factories;

use App\Models\OfficesModel;
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
        $office = new OfficesModel();
        $office = $office->getOffices();
        return [
            'office_id' => ($office == null) ? null : $office[rand(0, count($office) - 1)]->id,
            'timekeeper_name' => $this->faker->userName,
            'account' => $this->faker->userName,
            'password' => $this->faker->password,
            'status' => 1,
            'created_at' => now(7),
            'updated_at' => now(7),
            // 'created_user' => 1,
            // 'updated_user' => 1
        ];
    }
}
