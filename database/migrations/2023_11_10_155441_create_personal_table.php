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
        Schema::create('personal', function (Blueprint $table) {
            $table->string('identificacion',20);
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('correo',150);
            $table->string('telefono',15);
            $table->string('cargo',50);
            $table->decimal('porcentaje_pago',5,2)->unsigned();
            $table->primary('identificacion');
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
        Schema::dropIfExists('personal');
    }
};
