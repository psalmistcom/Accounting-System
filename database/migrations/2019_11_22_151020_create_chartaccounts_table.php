<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChartaccountsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chartaccounts', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('accountname', 50);
            $table->float('amount', 10, 0)->default(0);
            $table->string('chartid', 30);
            $table->string('type', 10);
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
        Schema::drop('chartaccounts');
    }
}
