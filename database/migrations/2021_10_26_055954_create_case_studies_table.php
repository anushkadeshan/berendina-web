<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title',400)->nullable();
            $table->text('description')->nullable();
            $table->string('si_title',400)->nullable();
            $table->text('si_description')->nullable();
            $table->string('ta_title',400)->nullable();
            $table->text('ta_description')->nullable();
            $table->string('category',100)->nullable();
            $table->boolean('active')->nullable()->default(false);
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
        Schema::dropIfExists('case_studies');
    }
}
