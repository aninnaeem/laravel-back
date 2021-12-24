<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAninsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anins', function (Blueprint $table) {
            $table->id();
            $table->string('prescription_date');
            $table->string('patient_name');
            $table->string('patient_age');
            $table->string('gender');
            $table->string('diagonsis');
            $table->string('medicine');
            $table->string('next_visit_date');
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
        Schema::dropIfExists('anins');
    }
}
