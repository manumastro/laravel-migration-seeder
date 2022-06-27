<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 100);
            $table->string('starting_station', 50);
            $table->string('end_station', 50);
            $table->time('starting_time', 6);
            $table->time('arrival_time', 6);
            $table->string('train_code', 50);
            $table->tinyInteger('number_of_coaches');
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_canceled')->default(1);
            
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
        Schema::dropIfExists('trains');
    }
}
