<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('value');//precio
            $table->integer('quota')->nullable();;//cuotas
            $table->integer('inscription_value')->nullable();;//valor inscripcion
            $table->integer('matricula_value')->nullable();//valor matricula
            $table->string('bonus_description')->nullable();//descripcion bono
            $table->string('cbu_transfer')->nullable();//cbu
            $table->string('dolar_value')->nullable();//valor del dolar
            $table->string('payment_others')->nullable();//otros pagos
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
        Schema::dropIfExists('payments');
    }
}
