<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfidTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("rfid", function (Blueprint $table)
		{
			$table->increments("rfid_id");
			$table->string("title");
			$table->text("description");
			$table->string("tagid");
			$table->string("status");

			$table->dateTimeTz("startdate")->nullable();
			$table->dateTimeTz("enddate")->nullable();

			$table->dateTimeTz("created_at")->default(DB::raw("CURRENT_TIMESTAMP"));
			$table->dateTimeTz("updated_at")->default(DB::raw("CURRENT_TIMESTAMP"));
			$table->dateTimeTz("deleted_at")->nullable();

			$table->index("tagid");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("rfid");
	}
}