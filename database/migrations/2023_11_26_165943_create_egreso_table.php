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
        Schema::create('tipos_egreso', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo', 100)->nullable(false);
            $table->boolean('estado')->default(true)->nullable(false);
            $table->timestamps();
        });

        Schema::create('egreso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_tipo_egreso')->nullable(false);
            $table->foreign('fk_tipo_egreso')
                  ->references('id')
                  ->on('tipos_egreso')
                  ->nullable(false);
            $table->text('descripcion_egreso')->nullable(false);
            $table->dateTime('fecha_hora')->nullable(false);
            $table->unsignedBigInteger('fk_users')->nullable(false);
            $table->foreign('fk_users')
                  ->references('id')
                  ->on('users')
                  ->nullable(false);
            $table->string('a_quien_se_dio')->nullable(false);
            $table->integer('valor')->nullable(false);
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
        Schema::dropIfExists('tipos_egreso');
        Schema::dropIfExists('egreso');
    }
};
