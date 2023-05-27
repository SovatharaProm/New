<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Borrower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrower', function (Blueprint $table) {
            $table->id('borrower_id');
            $table->integer('user_id')->unsigned();
            $table->integer('verification_pin')->unsigned();
            $table->string('phone_number',10);
            $table->foreign('user_id')->on('user')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('borrower');
    }
}
