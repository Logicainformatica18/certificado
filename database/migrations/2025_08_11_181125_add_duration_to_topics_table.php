<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('topics', function (Blueprint $table) {
            // Duración en minutos
            $table->unsignedInteger('state')
                  ->default(0);
            // ->after('alguna_columna'); // opcional si quieres posicionarlo
        });
    }

    public function down(): void
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->dropColumn('state');
        });
    }
};
