<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicacion', function(Blueprint $table)
		{
			$table->increments('idPublicacion');
			$table->String("TituloPublicacion");
			$table->text("Publicacion");
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
		Schema::drop('publicacion');
	}

}
