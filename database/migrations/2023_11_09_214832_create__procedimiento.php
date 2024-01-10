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
        Schema::create('Tipos_Procedimiento', function (Blueprint $table) {
            $table->increments('id_tipo');
            $table->string('nombre_tipo', 100)->nullable(false);
            $table->boolean('estado')->default(true)->nullable(false);
            $table->timestamps();
        });

        Schema::create('Procedimiento', function (Blueprint $table) {
            $table->increments('id_procedimiento');
            $table->string('nombre_procedimiento', 100)->nullable(false);
            $table->unsignedInteger('precio')->nullable(false);
            $table->unsignedInteger('fk_id_tipo')->nullable(false);
            $table->boolean('estado')->default(true)->nullable(false);
            $table->timestamps();

            $table->foreign('fk_id_tipo')->references('id_tipo')->on('Tipos_Procedimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_procedimiento');
    }
};
