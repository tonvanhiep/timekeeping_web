<?php

namespace Database\Seeders;

use App\Models\OfficesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $COUNT = 5;

    public function run()
    {
        OfficesModel::factory()->count($this->COUNT)->create();
    }
}
