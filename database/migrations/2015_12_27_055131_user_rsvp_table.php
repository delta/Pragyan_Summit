<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRsvpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rsvp', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 40);
	    $table->string('organization', 40);
            $table->string('email', 40);
            $table->string('phone', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
