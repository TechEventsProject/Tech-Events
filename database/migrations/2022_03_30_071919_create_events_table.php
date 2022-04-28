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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('speaker', 150)->nullable();
            $table->dateTime('date_and_time')->nullable();
            $table->integer('max_participants')->nullable();
            $table->string('description', 150);
            $table->string('image', 150)->nullable();
            $table->string('location', 150)->nullable();
            $table->boolean('past_event')->default(false);
            $table->boolean('highlighted')->default(false);
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
        Schema::dropIfExists('events');
    }
};
