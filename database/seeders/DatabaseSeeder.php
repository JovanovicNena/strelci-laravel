<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ls = new LigaSeeder;
        $ls->run();
        $ks = new KlubSeeder;
        $ks->run();
        $ss = new StrelacSeeder;
        $ss->run();
    }
}
