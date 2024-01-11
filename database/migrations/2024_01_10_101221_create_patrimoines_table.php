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
        Schema::create('patrimoines', function (Blueprint $table) {
            $table->increments('id_pat');
            $table->string('class_mat');
            $table->string('item_type_mat');
            $table->string('marque_modele');
            $table->string('quantite');
            $table->integer('numero_serie');
            $table->string('autorisant');
            $table->string('emetteur');
            $table->string('observation');
            $table->string('motif');
            $table->string('province_provenance');
            $table->string('provenance_destination');
            $table->string('statut_provenance');
            $table->string('date-sortie-date-entrer');
            $table->unsignedBigInteger('fonct_id');
            $table->foreign('fonct_id')->references('id_fonct')->on('fonctions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrimoines');
    }
};
