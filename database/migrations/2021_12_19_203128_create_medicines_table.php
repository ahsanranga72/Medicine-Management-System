<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('medi_name')->nullable();
            $table->string('medi_type')->nullable();
            $table->string('gen_name')->nullable();
            $table->string('mg')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('price')->nullable();
            $table->string('uses')->nullable();
            $table->string('caution')->nullable();
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
        Schema::dropIfExists('medicines');
    }
}
