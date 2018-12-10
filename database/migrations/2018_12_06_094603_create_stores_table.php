<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barrelno');
            $table->string('A70');
            $table->string('A98');
            $table->string('E');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->string('Takeup');
            $table->string('payin');
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
        Schema::dropIfExists('stores');
    }
}
