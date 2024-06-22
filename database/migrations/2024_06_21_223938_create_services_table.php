<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_services', function (Blueprint $table) {
            $table->id();
            $table->string('advice');
            $table->string('get_set_up');
            $table->string('guarantee');
            $table->string('maintenance');
            $table->string('test_rides');
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
        Schema::dropIfExists('offered_services');
    }
}
