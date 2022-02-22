<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_reports', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('thumb_url')->nullable();
            $table->string('file_url')->nullable();
            $table->integer('year')->nullable();
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
        Schema::dropIfExists('annual_reports');
    }
}
