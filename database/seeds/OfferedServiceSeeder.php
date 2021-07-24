<?php

use Illuminate\Database\Seeder;

class OfferedServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offered_services')->insert([
        	[
        		'id' => '1',
        		'name' => 'Paidopsiquiatría',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '2',
        		'name' => 'Pediatría',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '3',
        		'name' => 'Audiofoniatría',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '4',
        		'name' => 'Neuropediatría/Neurofisiología',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '5',
        		'name' => 'Terapia del Desarrollo',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '6',
        		'name' => 'Habilidades Sociales',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '7',
        		'name' => 'Terapia de Conducta',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '8',
        		'name' => 'Psicodiagnóstico',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '9',
        		'name' => 'Terapia Cognitiva',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '10',
        		'name' => 'Neuroentrenamiento',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '11',
        		'name' => 'Terapia de Lenguaje',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '12',
        		'name' => 'Psicomotriz e Integración Sensorial y Estimulación Temprana',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '13',
        		'name' => 'Terapia Emocional',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '14',
        		'name' => 'Psicoeducación',
        		'abbreviation' => 'XXXXXXXX',
        	],
        	[
        		'id' => '15',
        		'name' => 'Estimulación Temprana',
        		'abbreviation' => 'XXXXXXXX',
        	],
        ]);
    }
}
