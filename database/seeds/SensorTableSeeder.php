<?php

use Illuminate\Database\Seeder;
use App\Sensors;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sensors::class, 100)->create();
    }
}
