<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained('users');
            $table->string('image');
            $table->string('address', 500);
            $table->string('address_2', 500);
            $table->foreignId('countries_id')->constrained('countries');
            $table->foreignId('states_id')->constrained('states');
            $table->foreignId('cities_id')->constrained('cities');
            $table->integer('zip_code');
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
        Schema::dropIfExists('profiles');
    }
}
