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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('id_ingresos');
            $table->timestamp('fecha_pago');
            $table->decimal('pago',15,4);
            $table->unsignedInteger('fk_id_procedimiento', 3);
            $table->string('fk_identificacion',20);
            $table->foreign('fk_id_procedimiento')->references('id_procedimiento')->on('procedimiento');
            $table->foreign('fk_identificacion')->references('identificacion')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
};
