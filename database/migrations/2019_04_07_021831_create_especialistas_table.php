<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('speciality_id');
            $table->foreign('speciality_id')
                        ->references('id')
                        ->on('specialities')
                        ->onDelete('cascade');
            
            $table->unsignedBigInteger('medic_id');
            $table->foreign('medic_id')
                        ->references('id')
                        ->on('medics')
                        ->onDelete('cascade');
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
        Schema::dropIfExists('especialistas');
    }
}
