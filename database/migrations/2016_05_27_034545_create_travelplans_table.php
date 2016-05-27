<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelplans', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('is_international');
            $table->string('destination_city');
            $table->string('destination_country');
            $table->string('departure_country');
            $table->string('departure_city');
            $table->string('slug')->default('');
            $table->timestamps();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('user_id')->references('id')->on('users');
        });

        Schema::create('travelentries', function(Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('travelplan_id')->unsigned()->default(0);
            $table->foreign('travelplan_id')->references('id')->on('travelplans')->onDelete('cascade');
            $table->string('slug')->default('');
            $table->string('category');
            $table->string('notes');
            $table->double('estimated_amount');
            $table->double('actual_expense');
        });

        //
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
