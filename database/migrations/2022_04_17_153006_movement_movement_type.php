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
        Schema::create('movement_movement_type', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('movement_id');
            $table->unsignedBigInteger('movement_type_id');

            $table->foreign('movement_id')->references('id')->on('movements')->onDelete("cascade");
            $table->foreign('movement_type_id')->references('id')->on('movement_types')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movement_movement_types');
    }
};
