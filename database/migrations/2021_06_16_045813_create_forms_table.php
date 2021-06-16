<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->string('Name');
            $table->string('Username');
            $table->date('Date of Birth');
            $table->string('Email');
            $table->integer('Teliphone-No');
            $table->string('NIC No');
            $table->string('Gender');
            $table->string('Password');
            $table->string('Reenter Password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
