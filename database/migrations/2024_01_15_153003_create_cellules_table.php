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
        Schema::create('cellules', function (Blueprint $table) {
            $table->increments('id_cell');
            $table->string('nom_cell');
            $table->unsignedBigInteger('id_deprt');
            $table->foreign('id_deprt')->references('id_depart')->on('departenets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cellules');
    }
};
