<?php

namespace Database\Seeders;

use App\Models\TimesheetsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimesheetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $COUNT = 1000;

    public function run()
    {
        TimesheetsModel::factory()->count($this->COUNT)->create();
    }
}
