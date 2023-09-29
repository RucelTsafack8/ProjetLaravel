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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('NomPrenom');
            //on declare une cle secondaire depuis la table administrateurs
            $table->string('admin_email');
            $table->foreign('admin_email')->references('Email')->on('administrateurs');
            
            $table->string('Titre');
            $table->string('Description');
            $table->string('Photo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
