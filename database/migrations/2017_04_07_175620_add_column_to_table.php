<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('status_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign('bookings_status_id_foreign');
            $table->dropForeign('bookings_venue_id_foreign');
            $table->dropForeign('bookings_user_id_foreign');
        });
    }
}
