<?php

namespace Database\Seeders;

use App\Models\TimekeepersModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimekeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $COUNT = 10;

    public function run()
    {
        TimekeepersModel::factory()->count($this->COUNT)->create();
    }
}
