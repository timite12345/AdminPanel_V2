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
        Schema::create('demande__transps', function (Blueprint $table) {
            $table->id();
              $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->unique();
            $table->text('conditionTransp')->nullable();
            $table->string('adresseDep')->nullable();
            $table->string('adresseArriv')->nullable();
            $table->boolean('estUrgent')->default(false);
            $table->boolean('estTraiter')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande__transps');
    }
};
