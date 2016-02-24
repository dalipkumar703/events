<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events',function(Blueprint $table) {
		$table->increments('id');
		$table->string('event_name');
		$table->string('event_link');
		$table->string('number');
		$table->string('filepath');
		$table->string('name');
		$table->boolean('confirmed');
		$table->timestamps();
		});
		Schema::table('events', function ($table) {
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
