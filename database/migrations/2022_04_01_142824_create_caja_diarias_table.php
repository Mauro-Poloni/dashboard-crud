<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajaDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_diarias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('saldo',10);
            $table->string('cliente_fiado')->nullable();
            $table->decimal('cantidad_fiado')->nullable();
            $table->date('fecha_cancelacio_fiado')->nullable();
            $table->decimal('saldo_fiado')->nullable();
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
        Schema::dropIfExists('caja_diarias');
    }
}
