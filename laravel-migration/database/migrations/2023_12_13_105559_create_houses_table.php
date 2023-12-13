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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);
            $table->string('address');
            $table->string('city', 50);
            $table->string('postal_code', 5);
            $table->string('state', 50);
            $table->string('country', 100)->default('Italia');
            $table->text('description')->nullable();
            // $table->smallInteger('square_meters')->unsigned();
            $table->unsignedSmallInteger('square_meters');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('bathrooms');
            $table->float('price', 10, 2);
            $table->unsignedTinyInteger('is_available')->default(1);
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
        Schema::dropIfExists('houses');
    }
};
