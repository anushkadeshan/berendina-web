<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table->string('email',500);
            $table->string('sex',500);
            $table->text('message')->nullable();
            $table->string('cv',500);
            $table->bigInteger('career_id')->unsigned()->index()->nullable();
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
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
        Schema::dropIfExists('job_applications');
    }
}
