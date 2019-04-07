<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->dateTime('hora');
            
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                        ->references('id')
                        ->on('pacientes');
                        // ->onDelete('cascade');
            
            $table->unsignedBigInteger('medic_id');
            $table->foreign('medic_id')
                        ->references('id')
                        ->on('medics');
                        // ->onDelete('cascade');
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
        Schema::dropIfExists('citas');
    }
}
