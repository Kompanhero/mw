<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAuthorizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authorizations', function(Blueprint $table)
		{
			$table->foreign('patients_id')->references('id')->on('patients');
			$table->foreign('patients_authorized_id')->references('id')->on('patients');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('authorizations', function(Blueprint $table)
		{
			$table->dropForeign('authorizations_patients_id_foreign');
			$table->dropForeign('authorizations_patients_authorized_id_foreign');
		});
	}

}
