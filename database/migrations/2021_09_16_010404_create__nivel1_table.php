<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivel1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_nivel1', function (Blueprint $table) {
            $table->id();
            $table->string('hora',20)->nullable();
            $table->string('coltotal',20)->nullable();
            $table->string('HDL',20)->nullable();
            $table->string('LDL',20)->nullable();
            $table->string('Trigliceridos',20)->nullable();
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
        Schema::dropIfExists('_nivel1');
    }
}
