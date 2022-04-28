<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childs', function (Blueprint $table) {
            $table->bigIncrements('child_id');
            $table->unsignedbigInteger('id')->nullable();
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('zone')->nullable();
            $table->string('mothersname')->nullable();
            $table->string('childsname')->nullable();
            $table->unsignedbigInteger('ind_id')->nullable();
            $table->foreign('ind_id')->references('ind_id')->on('indigenous')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedbigInteger('sex_id')->nullable();
            $table->foreign('sex_id')->references('sex_id')->on('sex')->onUpdate('cascade')->onDelete('cascade');
            $table->date('birthdate')->nullable();
            $table->date('actualdate')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->integer('ageinmonths')->nullable();
            $table->string('weightst')->nullable();
            $table->string('heightst')->nullable();
            $table->string('weightforlengthst')->nullable();
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
        Schema::dropIfExists('child');
    }
}
