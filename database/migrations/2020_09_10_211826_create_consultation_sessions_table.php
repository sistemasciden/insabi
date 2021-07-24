<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_sessions', function (Blueprint $table) {

            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('tariff_table_amount_id')->constrained();
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
        Schema::dropIfExists('consultation_sessions');
    }
}
