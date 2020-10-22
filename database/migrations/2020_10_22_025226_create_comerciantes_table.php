<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComerciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comerciantes', function (Blueprint $table) {
            $table->bigIncrements('idcom');
			$table->string('nombre',20);
			$table->string('primerapellido',20);
			$table->string('segundoapellido',20);
			$table->string('sexo',2);
			$table->integer('fecha');
			$table->string('estado',20);
			$table->string('municipio',20);
			$table->string('localidad',20);
			$table->string('calle',20);
			$table->integer('No');
			$table->integer('CP');
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
        Schema::dropIfExists('comerciantes');
    }
}
