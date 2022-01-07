<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionPatientInfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_patient_infs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('pat_name')->nullable();
            $table->integer('pat_age')->nullable();
            $table->string('ref_dr_name')->nullable();
            $table->string('ref_dr_details')->nullable();
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
        Schema::dropIfExists('prescription_patient_infs');
    }
}
