<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); 
            $table->string('identificacion');
            $table->date('fecha');
            $table->string('hora', 20);
            $table->unsignedInteger('id_procedimiento');
            $table->boolean('estado_cita');
            $table->foreign('id_procedimiento')->references('id_procedimiento')->on('Procedimiento');  
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
};
