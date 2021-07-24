<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioeconomicLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socioeconomic_levels', function (Blueprint $table) {

            $table->enum('id', ['X', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'])->primary();
            $table->string('description', 32);
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
        Schema::dropIfExists('socioeconomic_levels');
    }
}
