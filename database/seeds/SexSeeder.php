<?php

use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->insert([
        	['id' => 'M',	'name' => 'Masculino',		'abbreviation' => 'MAS'],
        	['id' => 'F',	'name' => 'Femenino',		'abbreviation' => 'FEM'],
        ]);
    }
}
