<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('ticket_id')->unsigned()->require();
            $table->unsignedBigInteger('user_id')->require();

            $table->longText('comment')->require();

            $table->timestamps();
            $table->unsignedBigInteger('create_by')->index();
            $table->unsignedBigInteger('update_by')->index();

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
