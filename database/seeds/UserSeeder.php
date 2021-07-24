<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	    	[
	        	'name' => 'Sistemas CIDEN',
		        'email' => 'sistemas.ciden@gmail.com',
		        'email_verified_at' => now(),
		        'password' => bcrypt('C1d3n1N54B1'),
		        'remember_token' => Str::random(10),
                'active' => 1
	    	]
	    ]);
    }
}
