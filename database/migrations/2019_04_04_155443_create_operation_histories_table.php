<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_histories', function (Blueprint $table) {
            $table->bigIncrements('id');//ESTA TABLA es el resultrado
                                        //de personal con servicio-operacion

            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                        ->references('id')
                        ->on('servicios');
                        // ->onDelete('cascade');
            
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')
                        ->references('id')
                        ->on('personals');
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
        Schema::dropIfExists('operation_histories');
    }
}
