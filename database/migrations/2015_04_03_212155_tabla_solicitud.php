<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaSolicitud extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Solicitud', function(Blueprint $table)
		{
			$table->increments('idSolicitud');
			$table->String('Status');
			$table->integer('idUsuarioEmisor');
			$table->integer('idUsuarioReceptor');
			$table->integer('idProyecto')->nullable();
			$table->integer('TipoSolicitud');
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
		Schema::drop('Solicitud');
	}

}
