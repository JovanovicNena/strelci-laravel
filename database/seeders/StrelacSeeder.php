<?php

namespace Database\Seeders;

use App\Models\Strelac;
use Illuminate\Database\Seeder;

class StrelacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Strelac::factory()->count(120)->create();
    }
}
