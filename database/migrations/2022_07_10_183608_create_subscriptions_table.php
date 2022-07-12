<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fumugation_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('amount');
            $table->date('date_of_fumigation');
            $table->string('vendors_use');
            $table->string('reg_no');
            $table->string('cert_no');
            $table->string('reference');
            $table->date('issue_date');
            $table->date('expires_date');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fumugation_id')->references('id')->on('fumugations');
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
        Schema::dropIfExists('subscriptions');
    }
}
