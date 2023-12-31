<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_history', function (Blueprint $table) {
            $table->id('loan_history_id');
            $table->integer('user_id')->unsigned();
            $table->integer('lender_id')->unsigned();
            $table->integer('loan_id')->unsigned();
            $table->integer('bank_id')->unsigned();
            $table->float('loan_amt');
            $table->date('loan_date');
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
        Schema::dropIfExists('loan_history');
    }
}
