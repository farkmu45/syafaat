<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQurbansToQurbansItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qurbans_items', function (Blueprint $table) {
            $table->unsignedBigInteger('qurban_id');
            $table->foreign('qurban_id')->references('id')->on('qurbans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qurbans_items', function (Blueprint $table) {
            //
        });
    }
}
