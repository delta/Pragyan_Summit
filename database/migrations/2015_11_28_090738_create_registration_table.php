<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrants', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('email', 40);
            $table->string('phone', 40);
            $table->string('type', 40);
            $table->string('sop', 2000);
            //For created_at and updated_at fields.
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
        //
    }
}
