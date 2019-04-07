<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_histories', function (Blueprint $table) {
            $table->bigIncrements('id');//ESTA TABLA es el resultado
                                        //de tratamiento con servicio-operacion
            $table->unsignedBigInteger('tratamiento_id');
            $table->foreign('tratamiento_id')
                        ->references('id')
                        ->on('tratamientos');

            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                        ->references('id')
                        ->on('servicios');
                        

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
        Schema::dropIfExists('service_histories');
    }
}
