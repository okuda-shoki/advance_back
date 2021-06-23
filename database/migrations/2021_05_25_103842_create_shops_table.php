<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigincrements('id',20)->nullable(false);
            $table->string('shopname',255)->nullable(false);
            $table->unsignedBigInteger('area_id')->nullable(false);
            $table->unsignedBigInteger('genre_id')->nullable(false);
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->text('description')->nullable(false);
            $table->string('img',255)->nullable(false);
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
        Schema::dropIfExists('shops');
    }
}
