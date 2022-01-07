<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionMedicineInfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_medicine_infs', function (Blueprint $table) {
            $table->id();
            $table->string('pat_id');
            $table->string('mdn')->nullable();
            $table->time('bnt')->nullable();
            $table->time('lnt')->nullable();
            $table->time('dnt')->nullable();
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
        Schema::dropIfExists('prescription_medicine_infs');
    }
}
