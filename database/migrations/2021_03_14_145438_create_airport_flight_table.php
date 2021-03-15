<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->unsignedBigInteger('airport_id')->after('id');
            $table->foreign('airport_id')->references('id')->on('airports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('flights', function (Blueprint $table) {
            $table->dropForeign(['airport_id']);
            $table->dropColumn('airport_id');
        });
    }
}
