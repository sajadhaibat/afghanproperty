<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbroadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abroads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('country');
            $table->string('status');
            $table->string('type');
            $table->string('title');
            $table->string('city');
            $table->string('district');
            $table->string('sizetype');
            $table->string('area');
            $table->string('owned_by');
            $table->string('deed');
            $table->string('deedname');
            $table->string('price');
            $table->string('banner');
            $table->string('occupied');
            $table->string('attorney');
            $table->text('description');
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
        Schema::dropIfExists('abroads');
    }
}
