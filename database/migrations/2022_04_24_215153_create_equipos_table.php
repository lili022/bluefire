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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre',30);
            $table->String('Apellido',50);
            $table->integer('Numero');
            $table->bigInteger('Teléfono',50);
            $table->String('Referencia',150);
            $table->String('Correo',200);
            $table->String('Genero',20);
            $table->String('Tipo',20);
            $table->date('Fecha_de_Nacimiento');

            
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
        Schema::dropIfExists('equipos');
    }
};
