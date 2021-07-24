<?php

use Illuminate\Database\Seeder;

class SocioeconomicLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socioeconomic_levels')->insert([
            ['id' => 'X',		'description' => 'Excento',],
        	['id' => 'A',		'description' => 'Nivel A',],
        	['id' => 'B',		'description' => 'Nivel B',],
        	['id' => 'C',		'description' => 'Nivel C',],
        	['id' => 'D',		'description' => 'Nivel D',],
        	['id' => 'E',		'description' => 'Nivel E',],
        	['id' => 'F',		'description' => 'Nivel F',],
        	['id' => 'G',		'description' => 'Nivel G',],
        	['id' => 'H',		'description' => 'Nivel H',],
        	['id' => 'I',		'description' => 'Nivel I',],
        	['id' => 'J',		'description' => 'Nivel J',],
        ]);
    }
}
