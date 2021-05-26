<?php

use App\Models\Course;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('destination');
            $table->string('scope_title')->nullable();
            $table->string('hours')->nullable();
            $table->string('duration');
            $table->string('quota');
            $table->date('date_start');//fecha inicio
            $table->date('date_limit');//fecha limite de inscripcion
            $table->string('url_info');//informativo
            $table->string('link_inscription');//link intra/siu/form
            $table->string('link_preinscription');//link form / email
            $table->enum('status',[Course::Borrador,Course::Revision,Course::Publicado,Course::Baja])->default(Course::Borrador);
            $table->enum('status_course',[Course::Activo,Course::Proximamente,Course::Finalizado])->default(Course::Activo);
            $table->enum('status_link',[Course::Inscripcion,Course::PreInscripcion])->default(Course::Inscripcion);
            $table->string('slug');


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
           // $table->unsignedBigInteger('sede_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');
           // $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('set null');


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
        Schema::dropIfExists('courses');
    }
}
