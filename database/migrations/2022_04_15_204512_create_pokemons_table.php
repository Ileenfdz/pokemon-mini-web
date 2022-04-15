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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('number');
            $table->timestamps();
        });
        // Se podrá filtrar por ->nombre/tipo/número/localización/si es o no legendario
        // $table->string('description');
        // $table->string('weaknesses');
        // $table->string('location');
        // $table->boolean('legendary')->default(false);
        // data -> Height/Weight/Category/Abilities/Gender/Stats(with types)
        // $table->string('image-male');
        // $table->string('image-female');
        // $table->string('image-shiny');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
};
