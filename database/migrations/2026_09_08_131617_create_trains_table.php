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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');                // Azienda
            $table->string('departure_station');       // Stazione di partenza
            $table->string('arrival_station');         // Stazione di arrivo
            $table->time('departure_time');            // Orario di partenza
            $table->time('arrival_time');              // Orario di arrivo
            $table->string('train_code');              // Codice Treno
            $table->unsignedTinyInteger('total_carriages'); // Totale Carrozze (numero intero piccolo e positivo)
            $table->boolean('is_on_time')->default(true);   // Se in orario o meno (default: sì)
            $table->boolean('is_cancelled')->default(false); // Se cancellato o meno (default: no)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
