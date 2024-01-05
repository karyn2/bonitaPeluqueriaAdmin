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
            $table->string('identificacion',20);
            $table->string('nombre',100);
            $table->string('correo',100);
            $table->date('fecha');
            $table->string('hora',20);
            $table->string('celular',30);
            $table->unsignedInteger('procedimiento')->nullable(false);
            $table->primary('identificacion');

            $table->foreign('procedimiento')->references('id_procedimiento')->on('procedimiento'); 

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
