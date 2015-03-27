<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('missions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('destination_system');
            $table->string('destination_station');
            $table->string('commodity');
            $table->integer('qty');
            $table->boolean('hasCargo');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('missions');
	}

}
