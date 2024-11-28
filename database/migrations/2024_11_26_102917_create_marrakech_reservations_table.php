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
        Schema::create('marrakech_reservations', function (Blueprint $table) {
          $table->id();
          $table->string('nom', 60);
          $table->string('prenom', 60);
          $table->string('email',200);
          $table->string('tel', 15);
          $table->enum('billet',[
            "ceremonie-de-cloture",
            "vernissage-expo-histoire-du-piano",
            "afterwork",
            "concert-de-piano",
            "recital-des-laureats"
          ]);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marrakech_reservations');
    }
};
