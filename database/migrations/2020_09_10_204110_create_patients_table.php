<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {

            $table->id();
            $table->string('curp', 18)->unique();
            $table->string('first_surname', 128);
            $table->string('second_surname', 128)->nullable();
            $table->string('first_name', 256);
            $table->enum('sex_id', ['M', 'F'])->constrained();
            $table->foreign('sex_id')->references('id')->on('sexes');
            $table->date('birth_date');
            $table->string('file_number', 7)->unique();
            $table->foreignId('user_id_who_entered');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
