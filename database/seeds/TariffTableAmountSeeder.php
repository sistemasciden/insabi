<?php

use Illuminate\Database\Seeder;

class TariffTableAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariff_table_amounts')->insert([
            //Consulta General 010-01
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'A',		'amount' => 20,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'B',		'amount' => 40,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'C',		'amount' => 59,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'D',		'amount' => 80,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'E',		'amount' => 100,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'F',		'amount' => 120,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'G',		'amount' => 140,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'H',		'amount' => 159,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'I',		'amount' => 178,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 1,         'socioeconomic_level_id' => 'J',		'amount' => 198,     'default_amount' => 1,],

            //Consulta especialidad (EDI) 010-02
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'A',		'amount' => 42,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'B',		'amount' => 84,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'C',		'amount' => 126,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'D',		'amount' => 168,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'E',		'amount' => 210,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'F',		'amount' => 251,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'G',		'amount' => 294,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'H',		'amount' => 335,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'I',		'amount' => 377,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 2,         'socioeconomic_level_id' => 'J',		'amount' => 420,     'default_amount' => 1,], 

            //Consulta subsecuente especialidad 010-03
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'A',		'amount' => 31,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'B',		'amount' => 64,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'C',		'amount' => 94,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'D',		'amount' => 127,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'E',		'amount' => 158,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'F',		'amount' => 190,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'G',		'amount' => 222,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'H',		'amount' => 253,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'I',		'amount' => 285,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 3,         'socioeconomic_level_id' => 'J',		'amount' => 317,     'default_amount' => 1,],

            //Pruebas psicométricas/Psicodiagnóstico (individuial) 040-03
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'A',		'amount' => 295,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'B',		'amount' => 591,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'C',		'amount' => 884,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'D',		'amount' => 1179,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'E',		'amount' => 1475,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'F',		'amount' => 1770,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'G',		'amount' => 2063,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'H',		'amount' => 2359,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'I',		'amount' => 2654,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 4,         'socioeconomic_level_id' => 'J',		'amount' => 2949,    'default_amount' => 1,],

            //Pruebas de wppsi (BATTELLE) 040-11
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'A',		'amount' => 106,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'B',		'amount' => 212,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'C',		'amount' => 318,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'D',		'amount' => 424,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'E',		'amount' => 530,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'F',		'amount' => 636,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'G',		'amount' => 742,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'H',		'amount' => 849,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'I',		'amount' => 955,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 5,         'socioeconomic_level_id' => 'J',		'amount' => 1061,    'default_amount' => 0,],

            //Grupos de orientación (ESCUELA Y TALLER PADRES) 040-22
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 1,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'A',		'amount' => 35,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'B',		'amount' => 68,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'C',		'amount' => 103,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'D',		'amount' => 136,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'E',		'amount' => 171,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'F',		'amount' => 205,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'G',		'amount' => 239,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'H',		'amount' => 272,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'I',		'amount' => 306,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 6,         'socioeconomic_level_id' => 'J',		'amount' => 340,     'default_amount' => 1,],

            //Sesión de Terapia Neurofeedback 040-24
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'A',		'amount' => 45,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'B',		'amount' => 89,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'C',		'amount' => 134,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'D',		'amount' => 178,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'E',		'amount' => 223,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'F',		'amount' => 267,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'G',		'amount' => 313,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'H',		'amount' => 357,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'I',		'amount' => 402,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 7,         'socioeconomic_level_id' => 'J',		'amount' => 446,     'default_amount' => 1,],

            //Estudio audiofoniátrico completo 061-01
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'A',		'amount' => 90,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'B',		'amount' => 179,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'C',		'amount' => 270,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'D',		'amount' => 361,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'E',		'amount' => 451,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'F',		'amount' => 540,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'G',		'amount' => 630,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'H',		'amount' => 721,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'I',		'amount' => 810,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 8,         'socioeconomic_level_id' => 'J',		'amount' => 900,     'default_amount' => 1,],

            //20 sesiones al mes (5 por semana) 062-01
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'A',		'amount' => 276,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'B',		'amount' => 552,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'C',		'amount' => 828,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'D',		'amount' => 1104,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'E',		'amount' => 1380,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'F',		'amount' => 1655,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'G',		'amount' => 1931,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'H',		'amount' => 2208,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'I',		'amount' => 2483,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 9,         'socioeconomic_level_id' => 'J',		'amount' => 2759,    'default_amount' => 1,],

            //12 sesiones al mes (3 por semana) 062-02
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'A',		'amount' => 229,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'B',		'amount' => 458,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'C',		'amount' => 687,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'D',		'amount' => 917,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'E',		'amount' => 1146,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'F',		'amount' => 1375,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'G',		'amount' => 1604,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'H',		'amount' => 1833,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'I',		'amount' => 2062,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 10,        'socioeconomic_level_id' => 'J',		'amount' => 2291,    'default_amount' => 1,],

            //8 sesiones al mes (2 por semana) 062-03
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'A',		'amount' => 183,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'B',		'amount' => 366,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'C',		'amount' => 549,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'D',		'amount' => 732,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'E',		'amount' => 915,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'F',		'amount' => 1097,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'G',		'amount' => 1281,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'H',		'amount' => 1463,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'I',		'amount' => 1647,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 11,        'socioeconomic_level_id' => 'J',		'amount' => 1829,    'default_amount' => 1,],

            //1 sesión 062-05
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'A',		'amount' => 47,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'B',		'amount' => 94,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'C',		'amount' => 142,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'D',		'amount' => 190,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'E',		'amount' => 236,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'F',		'amount' => 284,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'G',		'amount' => 331,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'H',		'amount' => 380,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'I',		'amount' => 426,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 12,        'socioeconomic_level_id' => 'J',		'amount' => 474,     'default_amount' => 1,],

            //Sesión terapia psicológica (Emociones, Desarrollo, Cognitiva, Hab. Sociales y Psicoeducación 070-03
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'A',		'amount' => 30,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'B',		'amount' => 59,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'C',		'amount' => 89,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'D',		'amount' => 120,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'E',		'amount' => 148,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'F',		'amount' => 178,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'G',		'amount' => 208,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'H',		'amount' => 238,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'I',		'amount' => 267,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 13,        'socioeconomic_level_id' => 'J',		'amount' => 297,     'default_amount' => 1,],

            //Sesión de Rehabilitación Sensorial y Psicomotriz 070-04
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'A',		'amount' => 29,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'B',		'amount' => 57,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'C',		'amount' => 86,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'D',		'amount' => 113,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'E',		'amount' => 143,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'F',		'amount' => 171,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'G',		'amount' => 199,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'H',		'amount' => 228,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'I',		'amount' => 257,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 14,        'socioeconomic_level_id' => 'J',		'amount' => 284,     'default_amount' => 1,],

            //Terapia de Lenguaje 070-09
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'A',		'amount' => 42,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'B',		'amount' => 84,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'C',		'amount' => 126,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'D',		'amount' => 169,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'E',		'amount' => 211,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'F',		'amount' => 252,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'G',		'amount' => 295,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'H',		'amount' => 337,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'I',		'amount' => 379,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 15,        'socioeconomic_level_id' => 'J',		'amount' => 421,     'default_amount' => 1,],

            //Electroencefalografía (Electroencefalograma) 090-13
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'A',		'amount' => 130,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'B',		'amount' => 260,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'C',		'amount' => 390,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'D',		'amount' => 520,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'E',		'amount' => 650,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'F',		'amount' => 780,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'G',		'amount' => 911,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'H',		'amount' => 1041,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'I',		'amount' => 1171,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 16,        'socioeconomic_level_id' => 'J',		'amount' => 1301,    'default_amount' => 1,],

            //Potenciales evocados 090-15
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'A',		'amount' => 109,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'B',		'amount' => 220,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'C',		'amount' => 329,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'D',		'amount' => 438,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'E',		'amount' => 548,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'F',		'amount' => 658,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'G',		'amount' => 768,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'H',		'amount' => 877,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'I',		'amount' => 986,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 17,        'socioeconomic_level_id' => 'J',		'amount' => 1096,    'default_amount' => 1,],

            //Mapeo cerebral con potenciales o beg. 090-18
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'A',		'amount' => 212,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'B',		'amount' => 424,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'C',		'amount' => 636,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'D',		'amount' => 848,     'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'E',		'amount' => 1058,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'F',		'amount' => 1270,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'G',		'amount' => 1482,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'H',		'amount' => 1694,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'I',		'amount' => 1907,    'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 18,        'socioeconomic_level_id' => 'J',		'amount' => 2119,    'default_amount' => 1,],

            //Servicio de repocisión de carnet 370-10
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'A',		'amount' => 7,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'B',		'amount' => 17,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'C',		'amount' => 24,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'D',		'amount' => 34,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'E',		'amount' => 41,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'F',		'amount' => 50,      'default_amount' => 1,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'G',		'amount' => 58,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'H',		'amount' => 66,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'I',		'amount' => 74,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 19,        'socioeconomic_level_id' => 'J',		'amount' => 83,      'default_amount' => 0,],

            //Certificado médico (únicamente expedición) 370-12
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'A',		'amount' => 5,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'B',		'amount' => 13,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'C',		'amount' => 18,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'D',		'amount' => 24,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'E',		'amount' => 30,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'F',		'amount' => 37,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'G',		'amount' => 42,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'H',		'amount' => 49,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'I',		'amount' => 55,      'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 20,        'socioeconomic_level_id' => 'J',		'amount' => 61,      'default_amount' => 1,],

            //Fotocopia 370-56
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'X',		'amount' => 0,		 'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'A',		'amount' => 0,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'B',		'amount' => 0,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'C',		'amount' => 1,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'D',		'amount' => 1,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'E',		'amount' => 1,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'F',		'amount' => 1,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'G',		'amount' => 2,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'H',		'amount' => 2,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'I',		'amount' => 2,       'default_amount' => 0,],
            ['tariff_table_id' => 1,     'tariff_table_description_id' => 21,        'socioeconomic_level_id' => 'J',		'amount' => 2,       'default_amount' => 1,],
        ]);
    }
}
