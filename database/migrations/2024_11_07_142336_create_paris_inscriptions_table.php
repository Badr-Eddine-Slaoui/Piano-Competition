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
        Schema::create('paris_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 60);
            $table->string('prenom', 60);
            $table->date('date_naissance');
            $table->string('lieu_naissance', 100);
            $table->string('nationalite', 50);
            $table->enum('type_document', ['Passport', 'CIN']);
            $table->string('numero_document', 20);
            $table->string('adresse', 255);
            $table->string('code_postal', 10);
            $table->string('ville', 50);
            $table->string('tele', 15);
            $table->string('incription_email', 200);
            $table->string('langues_parlees', 100);
            $table->string('nom_professeur', 100);
            $table->string('etablissement_musical', 100);
            $table->string('categorie', 50);
            $table->string('oeuvre', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paris_inscriptions');
    }
};
