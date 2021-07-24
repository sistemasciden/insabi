<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUninsuredEvidenceSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uninsured_evidence_submissions', function (Blueprint $table) {

            $table->smallIncrements('id');
            $table->foreignId('patient_id')->constrained();
            $table->date('submission_date');
            $table->foreignId('user_id_who_entered');
            $table->timestamps();

            $table->unique(['patient_id', 'submission_date']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uninsured_evidence_submissions');
    }
}
