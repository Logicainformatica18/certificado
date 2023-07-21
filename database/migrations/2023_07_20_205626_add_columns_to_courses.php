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
        Schema::table('courses', function (Blueprint $table) {
        
            $table->longText("card")->nullable();
            $table->longText("presentation")->nullable();
            $table->longText("review")->nullable();
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
             $table->dropColumn('card');
            $table->dropColumn('presentation');
            $table->dropColumn('review');    // Example: Adding a text column
        });
    }
};
