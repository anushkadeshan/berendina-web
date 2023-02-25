<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('press_releases', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->nullable();
            $table->string('sn_title', 500)->nullable();
            $table->string('ta_title', 500)->nullable();
            $table->string('thumb')->nullable();
            $table->string('photo')->nullable();
            $table->string('published_date')->nullable();
            $table->string('company')->nullable();
            $table->integer('added_by')->nullable();
            $table->boolean('isPublished')->nullable();
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
        Schema::dropIfExists('press_releases');
    }
}
