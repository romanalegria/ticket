<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->smallIncrements('id');
            
            $table->string('name')->unique();
            $table->boolean('flag_status')->default(true);
            $table->timestamps();
            $table->unsignedBigInteger('create_by')->index();
            $table->unsignedBigInteger('update_by')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priorities');
    }
}
