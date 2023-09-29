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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('Status');
            //on ceclare la foreign key(cle secondaire) depuis la table locataire
            $table->string('locat_email');
            $table->foreign('locat_email')->references('Email')->on('locataires');
            $table->string('Nom_utilisateur')->unique();
            $table->string('MotDePasse');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
