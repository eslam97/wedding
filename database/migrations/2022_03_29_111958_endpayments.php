<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endpayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endpaymnts', function (Blueprint $table) {
            $table->id();
            $table->string('payment_status_id');
            $table->string('payment_type');
            $table->string('payment_brand');
            $table->integer('amount');
            $table->text('desc');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status_payment')->default(null)->comment('0=>refused 1=>accepted ')->nullable();
            $table->integer('hall_id');
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
            $table->integer('details_id');
            $table->foreign('details_id')->references('id')->on('details')->onDelete('cascade');
            $table->integer('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
