<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentario', function(Blueprint $table)
		{
			$table->increments('idComentario');
			$table->text("Contenido");
			$table->integer("idPublicacion");
			$table->integer("idUsuario");
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
		Schema::drop('comentario');
	}

}
