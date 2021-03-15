<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Telephone;
use App\Models\Internet;
use App\Models\Cable;
use App\Models\Packchannel;
use App\Models\Channel;
use App\Models\Programation;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Telephone::factory(20)->create();
        Internet::factory(20)->create();
        Cable::factory(20)->create();
        Packchannel::factory(20)->create();
        Channel::factory(20)->create();
        Programation::factory(40)->create();
    }
}
