<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResortModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resort_models', function (Blueprint $table) {
            $table->id();
            $table->string('resort_name');
            $table->string('resort_class');
            $table->string('resort_location');
            $table->integer('resort_fair');
            $table->integer('resort_discount');
            $table->string('availability');
            $table->string('resort_image');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('resort_models');
    }
}
