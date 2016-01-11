<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareinventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('hardwareinventories', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('host_id')->unsigned();
			$table->foreign('host_id')
				->references('id')->on('hosts');
			$table->string('computer_name', 255);
			$table->string('cpu', 50);
			$table->integer('memory');
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
		Schema::drop('hardwareinventories');
    }
}
