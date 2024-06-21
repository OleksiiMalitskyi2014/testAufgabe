<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->integer('debitor_nr')->unique()->after('latitude');
            $table->string('street')->after('debitor_nr');
            $table->integer('haus_nr')->after('street');
            $table->integer('plz')->after('haus_nr');
            $table->string('country')->after('plz');
            $table->string('website')->after('country');
            $table->string('phone')->after('website');
            $table->string('email')->after('phone');
            $table->string('logo')->after('email');
            $table->string('pin_logo')->after('logo');
            $table->string('slug')->unique()->after('pin_logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn(['debitor_nr', 'street', 'haus_nr', 'plz', 'country', 'website', 'phone', 'email', 'logo', 'pin_logo', 'slug']);
        });
    }
}
