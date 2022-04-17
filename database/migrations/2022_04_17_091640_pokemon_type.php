<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_type', function (Blueprint $table) {

        $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('pokemon_id');
            $table->unsignedBigInteger('type_id');

            $table->foreign('pokemon_id')->references('id')->on('pokemons')->onDelete("cascade");
            $table->foreign('type_id')->references('id')->on('types')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_type');

    }
};
