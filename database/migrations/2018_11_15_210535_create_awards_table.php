<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('website');

            $table->timestamps();
        });

        Schema::create('award_wine', function(Blueprint $table) {
            $table->integer('award_id');
            $table->integer('wine_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_wine');
        Schema::dropIfExists('awards');
    }
}
