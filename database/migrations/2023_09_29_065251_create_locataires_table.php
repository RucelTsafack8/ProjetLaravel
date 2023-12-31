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
        Schema::create('locataires', function (Blueprint $table) {
            $table->id();
            $table->string('NomPrenom');
            $table->string('Email')->unique();
            $table->integer('Telephone');
            $table->string('Profession');
            $table->string('Nom_utilisateur');
            $table->string('MotDePasse');
            $table->integer('Nbr_person');
            $table->date('Date_entrer');
            $table->date('Date_sorti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locataires');
    }
};
