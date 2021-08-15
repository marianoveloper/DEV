<?php

use App\Models\Payment;
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
            $table->integer('price');//precio
            $table->integer('quota')->nullable();;//cuotas
            $table->integer('inscription_value')->nullable();;//valor inscripcion
            $table->integer('matricula_value')->nullable();//valor matricula
            $table->string('bonus_description')->nullable();//descripcion bono

            $table->enum('status_link',[Payment::Inscripcion,Payment::PreInscripcion])->default(Payment::PreInscripcion);//BOTON DE INSC O PRE
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
