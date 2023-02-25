<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderLayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_layers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 400)->nullable();
            $table->string('si_title', 400)->nullable();
            $table->string('ta_title', 400)->nullable();
            $table->string('data_y', 20);
            $table->string('data_x', 20);
            $table->integer('data_v_offset');
            $table->integer('data_h_offset');
            $table->boolean('text_upper_case')->nullable()->default(false);
            $table->string('bg_color', 200)->nullable();
            $table->string('text_color', 200)->nullable();
            $table->string('text_align', 200)->nullable()->default('center');
            $table->integer('fontsize')->nullable();
            $table->integer('start_delay')->nullable()->default(1000);
            $table->integer('line_height')->nullable();
            $table->bigInteger('slider_id')->unsigned();
            $table->index('slider_id');
            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade');
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
        Schema::dropIfExists('slider_layers');
    }
}
