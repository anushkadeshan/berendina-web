<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('district',255);
            $table->string('branch_name',255);
            $table->enum('company',['BMIC','BDS']);
            $table->text('address')->nullable();
            $table->integer('telephone')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
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
        Schema::dropIfExists('branch_contacts');
    }
}
