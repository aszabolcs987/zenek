<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        // php artisan make:migration zenek
        // létrehozom a táblát és megadom milyen adatok lesznek benne
        Schema::create('zenek', function (Blueprint $table) {
            $table->id();
            $table->string('cim')->nullable(false);
            $table->string('eloado')->nullable(false);
            $table->date('megjelenes')->nullable(false);
            $table->integer('megtekintes')->nullable(false);
            $table->integer('like')->nullable(false);
        });
        // php artisan migrate - hogy lefusson
    }

    
    public function down(): void
    {
        //
    }
};
