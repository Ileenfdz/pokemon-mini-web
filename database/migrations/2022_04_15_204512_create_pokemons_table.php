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
            $table->string('number');
            $table->string('description');
            $table->boolean('legendary')->default(false);
            $table->timestamps();
        });
        // Done:
        // -Name  -Number -Description  -legendary
        // -Location  -Ability  -Weakness  -Type  /

        // Pivots :
        // -Location  -Ability  -Weakness  -Type  /

        // data -> Height/Weight/Category/Gender/Stats(with types)
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
