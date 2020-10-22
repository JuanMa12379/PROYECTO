<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('ida');
			$table->string('descripcion',50);
			$table->string('modelo',20);
			$table->integer('precio');
			$table->integer('cantidad');
			$table->integer('idt')->unsigned();
			$table->foreign('idt')->references('idt')->on('tipos');
			$table->integer('ide')->unsigned();
			$table->foreign('ide')->references('ide')->on('empresas');
			$table->rememberToken();
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
        Schema::dropIfExists('articulos');
    }
}
