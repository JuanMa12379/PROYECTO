<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores', function (Blueprint $table) {
            $table->bigIncrements('idp');
			$table->string('nombre',20);
			$table->string('calle',30);
			$table->integer('No');
			$table->integer('CP');
			$table->string('estado',20);
			$table->string('municipio',20);
			$table->string('localidad',30);
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
        Schema::dropIfExists('provedores');
    }
}
