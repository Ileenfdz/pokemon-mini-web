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
        Schema::create('poke_location_pokemon', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('pokemon_id');
            $table->unsignedBigInteger('poke_location_id');

            $table->foreign('pokemon_id')->references('id')->on('pokemons')->onDelete("cascade");
            $table->foreign('poke_location_id')->references('id')->on('poke_locations')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poke_location_pokemon');
    }
};
