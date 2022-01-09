<?php

namespace Database\Seeders;

use App\Models\Citizenship;
use Illuminate\Database\Seeder;

class CitizenshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citizenship::factory(4)->create();
    }
}
