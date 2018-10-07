<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('occasion');
            $table->integer('no_of_participants');
            $table->dateTime('datetime_start');
            $table->dateTime('datetime_end');
            $table->integer('facility_id')->unsigned();
            $table->timestamps();

            $table->index('facility_id', 'reservations_facility_id_index');

            $table->foreign('facility_id', 'reservations_facility_id_foreign')->references('id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign('reservations_facility_id_foreign');

            $table->dropIndex('reservations_facility_id_index');
        });
        Schema::dropIfExists('reservations');
    }
}
