<?php

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
        $this->call(UserSeeder::class);
        $this->call(SexSeeder::class);
        $this->call(OfferedServiceSeeder::class);
        $this->call(SocioeconomicLevelSeeder::class);
        $this->call(TariffTableSeeder::class);
        $this->call(TariffTableDescriptionSeeder::class);
        $this->call(TariffTableAmountSeeder::class);
    }
}
