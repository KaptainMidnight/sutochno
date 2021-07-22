<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('square');
            $table->integer('price');
            $table->boolean('booking')->default(false);
            $table->text('description');
            $table->string('city');
            $table->date('rental');
            $table->date('surrender');
            $table->integer('residents');
            $table->integer('max_residents');
            $table->integer('bathrooms')->default(1);
            $table->integer('beds')->default(1);
            $table->integer('floor')->nullable(); // null = private house
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('facilities');
    }
}
