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
        Schema::create('movement_movement_class', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('movement_id');
            $table->unsignedBigInteger('movement_class_id');

            $table->foreign('movement_id')->references('id')->on('movements')->onDelete("cascade");
            $table->foreign('movement_class_id')->references('id')->on('movement_classes')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movement_movement_classes');
    }
};
