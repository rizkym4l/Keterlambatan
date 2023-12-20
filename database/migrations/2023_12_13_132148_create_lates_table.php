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
        Schema::create('lates', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id');
            $table->dateTime('date_time_late');
            $table->text('information');
            $table->text('bukti');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lates');
    }
};
