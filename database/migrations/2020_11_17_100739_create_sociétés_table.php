<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociétésTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociétés', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('tel');
            $table->string('site_web');
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
        Schema::dropIfExists('sociétés');
    }
}
