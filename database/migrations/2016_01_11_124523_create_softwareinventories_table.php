<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareinventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('softwareinventories', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('host_id')->unsigned();
			$table->foreign('host_id')
				->references('id')->on('hosts');
			$table->string('software_name', 255);
			$table->string('execute_name', 255);
			$table->string('version', 50);
			$table->string('vendor_name', 50);
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
		Schema::drop('softwareinventories');
    }
}
