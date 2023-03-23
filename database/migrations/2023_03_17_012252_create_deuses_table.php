<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deuses', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('poderes');
            $table->integer('idade');
            $table->string('sexo');
            $table->string('arma');
            $table->text('animal');
            $table->string('filiacao');
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
        Schema::dropIfExists('deuses');
    }
};
