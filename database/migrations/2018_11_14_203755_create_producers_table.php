<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('website');
            $table->string('email');

            $table->timestamps();
        });

        Schema::table('wines', function(Blueprint $table) {
            $table->integer('producer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wines', function(Blueprint $table){
            $table->dropColumn('producer_id');
        });

        Schema::dropIfExists('producers');
    }
}
