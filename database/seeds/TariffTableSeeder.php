<?php

use Illuminate\Database\Seeder;

class TariffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariff_tables')->insert([
            ['id' => '1',		'description' => 'Tabulador de servicios médicos asistenciales 2020',		'initial_effective_date' => '2020-07-31'],
        ]);
    }
}
