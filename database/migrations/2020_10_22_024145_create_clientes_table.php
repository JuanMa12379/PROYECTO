<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('idc');
			$table->string('nombre',30);
			$table->string('primerapellido',30);
			$table->string('segundoapellido',30);
			$table->string('sexo',2);
			$table->date('fechanacimiento');
			$table->string('estado',30);
			$table->string('municipio',30);
			$table->string('localidad',30);
			$table->string('calle',30);
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
        Schema::dropIfExists('clientes');
    }
}
