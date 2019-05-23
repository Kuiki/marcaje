<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device')->nullable();

            $table->dateTime('entryDate')->nullable();
            $table->text('entryNote')->nullable();

            $table->dateTime('departureDate')->nullable();
            $table->text('departureNote')->nullable();

            $table->string('ip');
            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('incidence_entry_id');
            $table->unsignedBigInteger('incidence_departure_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('incidence_entry_id')->references('id')->on('incidents');
            $table->foreign('incidence_departure_id')->references('id')->on('incidents');

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
        DB::table('registers', function(Blueprint $table){
            $table->dropForeign('user_id');
            $table->dropForeign('incidence_id');
        });

        Schema::dropIfExists('registers');
    }
}
