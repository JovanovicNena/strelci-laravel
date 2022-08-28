<?php

namespace Database\Seeders;

use App\Models\Klub;
use Illuminate\Database\Seeder;

class KlubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Klub::factory()->count(80)->create();
    }
}
