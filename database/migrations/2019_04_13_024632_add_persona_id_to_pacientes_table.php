<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonaIdToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
                      
                $table->unsignedBigInteger('persona_id');
                $table->foreign('persona_id')
                            ->references('id')
                            ->on('personas');
                            
        
               
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            //
            $table->dropForeign(['persona_id']);
            $table->dropColumn('persona_id');
        });
    }
}
