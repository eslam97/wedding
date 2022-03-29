<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pics', function (Blueprint $table) {
        $table->id();
        $table->string('pic1')->nullable();
        $table->string('pic2')->nullable();
        $table->string('pic3')->nullable();
        $table->string('pic4')->nullable();
        $table->string('pic5')->nullable();
        $table->string('pic6')->nullable();
        $table->string('pic7')->nullable();
        $table->string('pic8')->nullable();
        $table->string('pic9')->nullable();
        $table->string('pic10')->nullable();
        $table->integer('hall_id');
        $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
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
        //
    }
}
