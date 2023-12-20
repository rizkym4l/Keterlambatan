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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 100)->unique();
            $table->string('name', 255);
            $table->unsignedBigInteger('rombel_id');
            $table->unsignedBigInteger('rayon_id');
            $table->timestamps();

            $table->foreign('rombel_id')->references('id')->on('rombels');
            $table->foreign('rayon_id')->references('id')->on('rayons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
