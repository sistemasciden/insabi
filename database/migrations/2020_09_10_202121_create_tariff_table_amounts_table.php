<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffTableAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_table_amounts', function (Blueprint $table) {

            $table->id();
            $table->unsignedSmallInteger('tariff_table_id')->constrained();
            $table->foreign('tariff_table_id')->references('id')->on('tariff_tables');
            $table->unsignedSmallInteger('tariff_table_description_id')->constrained();
            $table->foreign('tariff_table_description_id')->references('id')->on('tariff_table_descriptions');
            $table->enum('socioeconomic_level_id', ['X', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'])->constrained();
            $table->foreign('socioeconomic_level_id')->references('id')->on('socioeconomic_levels');
            $table->float('amount', 6, 2);
            $table->boolean('default_amount')->default(0);
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
        Schema::dropIfExists('tariff_table_amounts');
    }
}
