<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->increments('id_pers');
            $table->string('nom_pers');
            $table->string('genre');
            $table->unsignedBigInteger('depart_id');
            $table->unsignedBigInteger('fonct_id');
            $table->foreign('depart_id')->references('id_depart')->on('departements');
            $table->foreign('fonct_id')->references('id')->on('fonctions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
