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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('estUrgent');
            $table->string('estFacture')->default('true');
            $table->string('date_Dep');
            $table->string('adresse_Dep');
            $table->string('adresse_Arriv');
            $table->string('condTransp')->nullable();
            $table->string('idChauffeur');
            $table->string('ChaufSecond')->nullable();
            $table->string('heureDebut')->nullable();
            $table->string('heureFin')->nullable();
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
