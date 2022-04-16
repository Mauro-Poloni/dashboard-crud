<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->decimal('saldo', 8, 2);
            $table->date('fecha_venta');
            $table->decimal('conitos_queso', 8, 2)->nullable();
            $table->decimal('conitos_pizza', 8, 2)->nullable();
            $table->decimal('conitos_manteca', 8, 2)->nullable();
            $table->decimal('nachitos_clasicos', 8, 2)->nullable();
            $table->decimal('papas_clasicas', 8, 2)->nullable();
            $table->decimal('papas_americanas', 8, 2)->nullable();
            $table->decimal('palito_salado', 8, 2)->nullable();
            $table->decimal('chizito', 8, 2)->nullable();
            $table->decimal('bastoncito', 8, 2)->nullable();
            $table->decimal('pizzitos', 8, 2)->nullable();
            $table->decimal('tutuca', 8, 2)->nullable();
            $table->decimal('mix_desayuno', 8, 2)->nullable();
            $table->decimal('mix_patagonico', 8, 2)->nullable();
            $table->decimal('pochoclo', 8, 2)->nullable();
            $table->foreignId('id_articulo')
            ->nullable()
            ->constrained('articulos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_cliente')
                ->nullable()
                ->constrained('clientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
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
        Schema::dropIfExists('ventas');
    }
}
