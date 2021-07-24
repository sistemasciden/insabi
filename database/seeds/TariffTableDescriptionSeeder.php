<?php

use Illuminate\Database\Seeder;

class TariffTableDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariff_table_descriptions')->insert([
            ['id' => '1',		'key' => '010-01',    'description' => 'Consulta general',],
            ['id' => '2',		'key' => '010-02',    'description' => 'Consulta especialidad (EDI)',],
            ['id' => '3',		'key' => '010-03',    'description' => 'Consulta subsecuente especialidad',],
            ['id' => '4',		'key' => '040-03',    'description' => 'Pruebas psicométricas/Psicodiagnóstico (individuial)',],
            ['id' => '5',		'key' => '040-11',    'description' => 'Pruebas de wppsi (BATTELLE)',],
            ['id' => '6',		'key' => '040-22',    'description' => 'Grupos de orientación (ESCUELA Y TALLER PADRES)',],
            ['id' => '7',		'key' => '040-24',    'description' => 'Sesión de Terapia Neurofeedback',],
            ['id' => '8',		'key' => '061-01',    'description' => 'Estudio audiofoniátrico completo',],
            ['id' => '9',		'key' => '062-01',    'description' => '20 sesiones al mes (5 por semana)',],
            ['id' => '10',		'key' => '062-02',    'description' => '12 sesiones al mes (3 por semana)',],
            ['id' => '11',		'key' => '062-03',    'description' => '8 sesiones al mes (2 por semana)',],
            ['id' => '12',		'key' => '062-05',    'description' => '1 sesión',],
            ['id' => '13',		'key' => '070-03',    'description' => 'Sesión terapia psicológica (Emociones, Desarrollo, Cognitiva, Hab. Sociales y Psicoeducación',],
            ['id' => '14',		'key' => '070-04',    'description' => 'Sesión de Rehabilitación Sensorial y Psicomotriz',],
            ['id' => '15',		'key' => '070-09',    'description' => 'Terapia de Lenguaje',],
            ['id' => '16',		'key' => '090-13',    'description' => 'Electroencefalografía (Electroencefalograma)',],
            ['id' => '17',		'key' => '090-15',    'description' => 'Potenciales evocados',],
            ['id' => '18',		'key' => '090-18',    'description' => 'Mapeo cerebral con potenciales o beg.',],
            ['id' => '19',		'key' => '370-10',    'description' => 'Servicio de repocisión de carnet',],
            ['id' => '20',		'key' => '370-12',    'description' => 'Certificado médico (únicamente expedición)',],
            ['id' => '21',		'key' => '370-56',    'description' => 'Fotocopia',],
        ]);
    }
}
