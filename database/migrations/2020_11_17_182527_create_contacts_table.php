<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civilité');
            $table->string('prénom');
            $table->string('nom');
            $table->string('fonction');
            $table->string('téléphone');
            $table->date('date_naissance');
            $table->string('email');
            $table->unsignedInteger('société_id');
            $table->foreign('société_id')
                    ->references('id')
                    ->on('sociétés');
            $table->string('ville');
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
        Schema::dropIfExists('contacts');
    }
}
