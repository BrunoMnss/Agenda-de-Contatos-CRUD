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
        Schema::create('agenda_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 190);
            $table->string('idade', 3);
            $table->string('telefone', 20)->nullable();
            $table->string('email', 190);
            $table->string('cidade', 190);
            $table->string('estado', 2);
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
        Schema::dropIfExists('agenda_contatos');
    }
};
